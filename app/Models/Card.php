<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

     public function collections(){
    	return $this->hasMany(Collection::class);
    }
    
    public function onSale(){
    	return $this->hasMany(Sale::class);
    }
}