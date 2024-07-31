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
            $request['image'] = $this->uploadImage($this->request['image']);
        }

        $product = Product::find($this->dataId);

        $product->update($request);

        $this->setOk();

        return $this;
    }

    protected function uploadImage($image)
    {
        $imageName = Str::uuid()->toString() . '.' . $image->extension();

        Image::read($image)->scale(800, 600)->save(public_path('images/' . $imageName));
        
        // $image->move(public_path('images'), $imageName);
        return $imageName;
    }
}
