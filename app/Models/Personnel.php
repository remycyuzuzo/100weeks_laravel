<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'tel_number',
        'gender',
        'status',
        'profile_image',
        'id_card_number',
        'address',
        'personnel_type'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
