<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['provider','provider_id','status','usertype','name', 'email', 'password','phone','fax','about','facebook','twitter','gplus','linkedin','image_icon'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getUserInfo($id)
    {
        return User::find($id);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPassword($token));
    }

    public function properties()
    {
        return $this->hasMany(Properties::class, 'user_id');
    }

    public function home_exchange_properties()
    {
        return $this->hasMany(Home_Exchange::class, 'user_id');
    }

}

class CustomPassword extends ResetPassword
{
    public function toMail($notifiable)
    {
        $url=url('admin/password/reset/'.$this->token);

        $user_type = $notifiable->usertype;
        $user_name = $notifiable->name;

        return (new MailMessage)
            ->subject(__('text.Reset password'))
            ->from(getcong('site_email'), getcong('site_name'))
            /*->line('We are sending this email because we recieved a forgot password request.')
            ->action('Reset Password', $url)
            ->line('If you did not request a password reset, no further action is required. Please contact us if you did not submit this request.');*/
            ->view('emails.password',['url'=>$url,'user_type'=>$user_type,'user_name'=>$user_name]);
    }
}
