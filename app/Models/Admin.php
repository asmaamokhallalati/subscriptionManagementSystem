<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\model_has_permission;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        // 'password',
    ];

    // public function getActiveKeyAttribute()
    // {
    //     return $this->active ? 'Active' : 'In-Active';
    // }

    public function userName(): Attribute
    {
        return new Attribute(get: fn () => $this->name);
    }


    public function role () {
        return $this->belongsTo('App\Models\model_has_permission')->where('model_type','=','App\Models\Admin');
    }
   
}