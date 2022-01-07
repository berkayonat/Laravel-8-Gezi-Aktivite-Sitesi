<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    #One To Many (Inverse) / Belong To
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function participation()
    {
        return $this->hasMany(Participation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
