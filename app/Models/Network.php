<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $fillable = ['name','bandwith','description'];

    /** @use HasFactory<\Database\Factories\NetworkFactory> */
    use HasFactory;

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
