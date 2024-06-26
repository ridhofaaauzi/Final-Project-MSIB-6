<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'poin',
        'image'
    ];

    public function redemption()
    {
        return $this->hasMany(Redemption::class)->latest();
    }
}