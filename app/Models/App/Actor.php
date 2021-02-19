<?php

namespace App\Models\App;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actor extends AppBaseModel
{
    use HasFactory;

    public function getNameAttribute($value)
    {
        return $value;
    }

    public function getDescriptionAttribute($value)
    {
        return $value;
    }

    public function getGeneratedRank()
    {
        return 5;
    }

    public function getAvatarAttribute()
    {
        return '/images/avatar.jpg';
    }

    public function getPhoneAttribute($value)
    {
        return $value;
    }
}
