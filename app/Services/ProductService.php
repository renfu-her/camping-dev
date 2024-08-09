<?php

namespace App\Services;

use App\Traits\ResponseTrait;
use App\Traits\RulesTrait;
use App\Services\Service;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class ProductService extends Service
{
    use ResponseTrait, RulesTrait;
    private $request, $response, $dataId;
    private $changeErrorName;

    private $rules = [
        'product' => [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'sort' => 'nullable|integer',
            'status' => 'required|boolean',
        ],
    ];

    public function __construct($request, $dataId = null)
    {
        $this->request = collect($request);
        $this->dataId = $dataId;
    }

    public function store()
    {

        if (!empty($this->response)) {
            return $this;
        }

        $request = $this->request->only(array_keys($this->rules['product']))->toArray();

        // 處理圖片上傳
        if (isset($this->request['image']) && $this->request['image'] instanceof \Illuminate\Http\UploadedFile) {
            $request['image'] = $this->uploadImage($this->request['image']);
        }

        if (isset($this->request['content_image']) && $this->request['content_image'] instanceof \Illuminate\Http\UploadedFile) {
            $request['content_image'] = $this->uploadImage($this->request['content_image'], 960, 430);
        }

        Product::create($request);

        $this->setOk();

        return $this;
    }

    public function update()
    {
        if (!empty($this->response)) {
            return $this;
        }

        $request = $this->request->only(array_keys($this->rules['product']))->toArray();


        // 處理圖片上傳
        if (isset($this->request['image']) && $this->request['image'] instanceof \Illuminate\Http\UploadedFile) {
            $request['image'] = $this->uploadImage($this->request['image'], 800, 600);
        }

        if (isset($this->request['content_image']) && $this->request['content_image'] instanceof \Illuminate\Http\UploadedFile) {
            $request['content_image'] = $this->uploadImage($this->request['content_image'], 960, 430);
        }

        $request['content'] = $this->request['content'];

        $product = Product::find($this->dataId);

        $product->update($request);

        $this->setOk();

        return $this;
    }

    protected function uploadImage($image, $width = 800, $height = 600)
    {
        $imageName = Str::uuid()->toString() . '.' . $image->extension();

        Image::read($image)->scale($width, $height)->save(public_path('images/' . $imageName));

        // $image->move(public_path('images'), $imageName);
        return $imageName;
    }
}
