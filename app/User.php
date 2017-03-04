<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {

            $role = Role::where('role', '=', 'user')->first();
            $model->roles()->attach($role->id);

            $code = new Code;
            $code->code = str_random(8);
            $model->codes()->save($code);

        });

        static::deleting(function ($model){
            $model->roles()->detach();
            $model->codes()->delete();
        });
    }

    public function setPasswordAttribute($pass){

        $this->attributes['password'] = Hash::make($pass);

    }

    public function roles() {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    public function codes()
    {
        return $this->hasMany('App\Code', 'user_id');
    }
}
