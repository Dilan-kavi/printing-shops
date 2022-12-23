<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public function customers(){
        return $this->belongsToMany(Customer::class);
    }
    public function skeepers(){
        return $this->belongsToMany(Skeeper::class);
    }
    protected $guarded = [];
}
