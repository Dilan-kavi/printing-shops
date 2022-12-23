<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pcenter extends Model
{
    use HasFactory;
    public function skeepers(){
        return $this->hasMany(Skeeper::class,'pcenters_id');
    }
    public function customers(){
        return $this->belongsToMany(Customer::class);
    }
    public function timeslot(){
        return $this->belongsToMany(Timeslot::class);
    }
    protected $guarded = [];
}
