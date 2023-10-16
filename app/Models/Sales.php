<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function soldItems(){
        return $this->hasMany(SoldItem::class, 'sale_id');
    }
}
