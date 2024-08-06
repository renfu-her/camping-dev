<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use App\Services\UserService as Service;

class UserController extends Controller
{

    public function index()
    {

        $users = User::all();

        return view('backend.user.index', compact('users'));
    }

    public function create()
    {
        
        return view('backend.user.create');
    }

    public function store(Request $request)
    {
        $result = (new Service($request))
            ->runValidate('user')
            ->store()
            ->getResponse();

        $msg = json_decode($result->content(), true);
        if ($msg['code'] == '00') {
            return redirect()->route('backend.user.index')->with('success', '新增成功！');
        }

        return redirect()->route('backend.user.create')->with('error', '新增失敗！');
    }

    public function show($id)
    {

        return view('backend.user.show');
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);

        return view('backend.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $result = (new Service($request, $id))
            ->runValidate('user')
            ->update()
            ->getResponse();

        $msg = json_decode($result->content(), true);
        if ($msg['code'] == '00') {
            return redirect()->route('backend.user.index')->with('success', '更新成功！');
        }

        return redirect()->route('backend.user.update', $id)->with('error', '新增失敗！');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('backend.user.index')->with('success', '刪除成功！');
    }
}
