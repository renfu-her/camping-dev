<?php

namespace App\Services;

use App\Traits\ResponseTrait;
use App\Traits\RulesTrait;
use App\Services\Service;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class UserService extends Service
{
    use ResponseTrait, RulesTrait;
    private $request, $response, $dataId;
    private $changeErrorName;

    private $rules = [
        'user' => [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ],
        'password' => [
            'password' => 'required|string',
        ]
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

        $request = $this->request->only(array_keys($this->rules['user']))->toArray();

        User::create($request);

        $this->setOk();

        return $this;
    }

    public function update()
    {
        if (!empty($this->response)) {
            return $this;
        }

        $request = $this->request->only(array_keys($this->rules['user']))->toArray();


        $user = User::find($this->dataId);

        $user->update($request);

        $this->setOk();

        return $this;
    }

}
