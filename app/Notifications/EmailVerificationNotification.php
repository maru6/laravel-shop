<?php

namespace App\Notifications;

<<<<<<< HEAD
use Illuminate\Support\Str;
use Cache;
=======
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
<<<<<<< HEAD

class EmailVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

=======
use Illuminate\Support\Str;
use Cache;

class EmailVerificationNotification extends Notification
{
    use Queueable;
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
<<<<<<< HEAD
=======
    
    // 我们只需要通过邮件通知，因此这里只需要一个 mail 即可
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
<<<<<<< HEAD
    public function toMail($notifiable)
    {
        // 使用 Laravel 内置的 Str 类生成随机字符串的函数，参数就是要生成的字符串长度
        $token = Str::random(16);
        // 往缓存中写入这个随机字符串，有效时间为 30 分钟。
        Cache::set('email_verification_'.$notifiable->email, $token, 30);
        $url = route('email_verification.verify', ['email' => $notifiable->email, 'token' => $token]);

        return (new MailMessage)
                    ->greeting($notifiable->name.'您好:')
=======
    
    // 发送邮件时会调用此方法来构建邮件内容，参数就是 App\Models\User 对象
    public function toMail($notifiable)
    {
        $token = Str::random(16);

        Cache::set('email_verification_'.$notifiable->email, $token, 30);
        $url = route('email_verification.verify',['email' => $notifiable->email, 'token' => $token]);
        return (new MailMessage)
                    ->greeting($notifiable->name.'您好：')
>>>>>>> b761bc7375098edad89b552db124b7c74eb790a3
                    ->subject('注册成功，请验证您的邮箱')
                    ->line('请点击下方链接验证您的邮箱')
                    ->action('验证', $url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
