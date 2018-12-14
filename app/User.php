<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
//    use SoftDeletes;
//    use EntrustUserTrait;
    use EntrustUserTrait { restore as private restoreA; }
//    use SoftDeletes { restore as private restoreB; }

    public function restore()
    {
        $this->restoreA();
//        $this->restoreB();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $dates = ['deleted_at'];
    protected $table = "users";
    protected $fillable = [
        'id','name','fullname' , 'email', 'password','address','phone','gender','avatar','status','level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
        return $this->belongsToMany("App\Role");
    }
}
