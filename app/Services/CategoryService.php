<?php

namespace App\Services;

use App\Traits\ResponseTrait;
use App\Traits\RulesTrait;
use App\Services\Service;

use App\Models\Category;

class CategoryService extends Service
{
    use ResponseTrait, RulesTrait;
    private $request, $response, $dataId;
    private $changeErrorName;

    private $rules = [
        'category' => [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'parent_id' => 'nullable|integer',
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

        $request = $this->request->only(array_keys($this->rules['category']))->toArray();
        

        Category::create($request);

        $this->setOk();

        return $this;
    }

    public function update()
    {
        if (!empty($this->response)) {
            return $this;
        }

        $request = $this->request->only(array_keys($this->rules['category']))->toArray();

        $category = Category::find($this->dataId);

        $category->update($request);

        $this->setOk();

        return $this;
    }
}
