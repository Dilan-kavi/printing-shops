<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Print_detail extends Model
{
    use HasFactory;
    public function orders(){
        return $this->belongsToMany(Print_detail::class);
    }
    public function customers(){
        return $this->belongsToMany(Customer::class,'uploads');
    }
    protected $guarded = [];
}
