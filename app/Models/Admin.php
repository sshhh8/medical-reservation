<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;

    protected $table = 'admins';

    protected $fillable = ['name','email','category_id','password'];

    protected $guard = 'admin';

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
