<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Category;
use App\Models\Company;
use App\Models\Image;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'ci_number',
        'profession_id',
        'des_product',
        'user_status',
        'activated_date',
        'email',
        'password',
        'phone_number',
        'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function authorizeRoles($roles)
    {
        abort_unless($this->hasAnyRole($roles), 401);
        return true;
    }
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                 return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class)->withTimestamps();
    }

    public function getUsers()
    {
        $users = [];
        $users_all = User::all();
        foreach ($users_all as $user) {
            if($user->roles()->where('name', 'user')->first()){
                $users[]= $user;
            }
        }
        return $users;
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable')->withTimestamps();
    }

}
