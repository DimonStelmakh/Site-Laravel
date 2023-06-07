<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function specials()
    {
        return $this->belongsToMany(Special::class, 'offer_special', 'offer_id', 'special_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
