<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionWaste extends Model
{
    use HasFactory;

    protected $fillable = [
        'berat_sampah',
        'total_poin',
        'user_id',
        'waste_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function waste()
    {
        return $this->belongsTo(Waste::class);
    }
}