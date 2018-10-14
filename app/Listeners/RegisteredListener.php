<?php

namespace App\Listeners;

use App\Notifications\EmailVerificationNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

<<<<<<< HEAD
class RegisteredListener
{

    public function handle(Registered $event)
    {
        $user = $event->user;

        $user->notify(new EmailVerificationNotification());
    }
}
=======
// implements ShouldQueue 让这个监听器异步执行
class RegisteredListener implements ShouldQueue
{
    // 当事件被触发时，对应该事件的监听器的 handle() 方法就会被调用
    public function handle(Registered $event)
    {
        // 获取到刚刚注册的用户
        $user = $event->user;
        // 调用 notify 发送通知
        $user->notify(new EmailVerificationNotification());
    }
}
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
