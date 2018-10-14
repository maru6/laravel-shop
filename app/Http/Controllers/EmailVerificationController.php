<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Cache;
use App\Notifications\EmailVerificationNotification;
use Mail;
use Illuminate\Http\Request;



class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {

    	$email = $request->input('email');
    	$token = $request->input('token');


    	if (!$email || !$token) {
    		throw new Exception('验证链接不正确');
    	}

    	if ($token != cache::get('email_verification_'.$email)) {

    		throw new Exception('验证链接不正确或已过期');
    	}

    	if (!$user = User::where('email', $email)->first()) {
    		throw new Exception('用户不存在');
    	}


 		// 将指定的 key 从缓存中删除，由于已经完成了验证，这个缓存就没有必要继续保留。
    	Cache::forget('email_verification_'.$email);
    	// 最关键的，要把对应用户的 `email_verified` 字段改为 `true`。
    	$user->update(['email_verified' => true]);

    	return view('pages.success', ['msg' => '邮箱验证成功']);
    }

    public function send(Request $request)
    {
    	$user = $request->user();

    	if ($user->email_verified) {
    		throw new Exception('你已验证过邮箱了');

    	}

    	$user->notify(new EmailVerificationNotification());

    	return view('pages.success', ['msg' => '邮件发送成功']);
    }

}