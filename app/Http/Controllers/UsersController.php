<?php
/**
 * Copyright (c) 2017 Chinaway ltd.
 *     Developed By Team-Link
 *
 * PHP Version 5.5
 *
 * @author wangruohang <wangruoxing@huoyunren.com>
 * @since  17/5/2 下午2:10
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    const USER_GROUP_NOR = 2;//用户组:普通用户

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|max:50|unique:users',
            'email'    => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed',
        ]);

        $userData = [
            'id'         => $this->guid(),
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => $request->password,
            'createtime' => date('Y-m-d H:i:s'),
            'group'      => self::USER_GROUP_NOR,
        ];

        DB::table('users')->insert($userData);
        session()->put(['name' => $userData['name'], 'id' => $userData['id']]);

        return redirect()->route('users.show', [$userData['id']]);
    }
}