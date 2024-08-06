<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $req = $request->all();

        $user = User::where('email', $req['email'])->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => '使用者不存在',
                'data' => null
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => '取得使用者列表成功',
            'data' => $user
        ]);
    }
}
