<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','user_id','date'];

    public function getDateFormattedAttribute()
    {
        return Carbon::parse($this->date)->format('Y年n月j日');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function admins()
    {
        return $this->belongsTo(Admin::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function questionnaires()
    {
        return $this->hasOne(Questionnaire::class, );
    }
}
