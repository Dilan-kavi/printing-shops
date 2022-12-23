<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Pcenter;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Timeslot extends Model
{
    use HasFactory;
    public function orders(){
        return $this->hasOne(Order::class);
    }
    public function pcenter(){
        return $this->hasOne(Pcenter::class);
    }
    public function customer(){
        return $this->hasOne(Customer::class);
    }
}
