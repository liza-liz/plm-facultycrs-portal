<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_code',
        'building_name',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
