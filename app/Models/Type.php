<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function getLowestPrice()
    {
        return $this->offers->where('price', '!==', null)->min('price');
    }
}
