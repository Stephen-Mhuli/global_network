<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name', 'location', 'description'];

    /** @use HasFactory<\Database\Factories\RegionFactory> */
    use HasFactory;

    public function network() {
        return $this->hasMany(Network::class);
    }
}
