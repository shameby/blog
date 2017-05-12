<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class SessionsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|max:50',
            'password'  => 'required',
        ]);

        $credentials = [
            'name'      => $request->name,
            'password'  => $request->password,
        ];

        $user = User::checkIsUserExist($credentials['name'], $credentials['password']);
        if ($user) {
            // 登录成功后的相关操作
            session()->put(['name' => $user->name, 'id' => $user->id]);
            session()->flash('success', 'Welcome back！');
            return redirect()->route('users.show', [$user->id]);
        } else {
            // 登录失败后的相关操作
            session()->flash('danger', 'Sorry,your name and password do not match');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        session()->flush();
        session()->flash('success', 'YOU HAVE BEEN LOGOUT SUCCESSFULLY！');
        return redirect('login');
    }
}