<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OpenIdController extends Controller
{
    public function redirect(Request $request)
    {
        $openId = new \LightOpenID($request->getHttpHost());

        if(!$openId->mode) {
            $openId->identity = config('openid.identity');
            $openId->required = config('openid.required');
            return redirect($openId->authUrl());
        } else {
            return redirect('login.index')->with('error', '登入失敗');
        }
    }

    public function process(Request $request)
    {
        $openId = new \LightOpenID($request->getHttpHost());

        if ($openId->mode == 'cancel') {
            return redirect()->route('login.index')
                             ->with('warning', '使用者取消授權');
        }

        if (!$openId->validate()) {
            return redirect()->route('login.index')
                             ->with('warning', '授權有誤');
        }

        $account = collect(array_values(explode('/', $openId->identity)))->last();

        $attributes = $openId->getAttributes();
        $name  = $attributes['namePerson']; // 姓名
        $email = $attributes['contact/email']; // 公務信箱

        $user = User::firstOrNew([
            'openid' => $account
        ]);

        if (!$user->exists) {
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt(str_random(15));
            $user->openid = $account;
            $user->save();
        }

        \Auth::login($user);

        return redirect()->route('posts.index')
                         ->with('success', '登入成功');
    }
}
