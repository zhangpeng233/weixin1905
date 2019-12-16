<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function addUser()
    {
        $pass = '123456';
        $email = 'zhang@qq.com';
        $user_name = Str::random(8);
        // 使用密码函数
        $password = password_hash($pass,PASSWORD_BCRYPT);
        $data = [
            'user_name' => $user_name,
            'password'  => $password,
            'email'     => $email,
        ];
        echo '<pre>';print_r($data);echo '</pre>';
        $uid = UserModel::insertGetId($data);
        var_dump($uid);
    }