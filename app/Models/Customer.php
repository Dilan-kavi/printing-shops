<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pcenter;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function pcenters(){
        return $this->belongsToMany(Pcenter::class);
    }
    public function notifications(){
        return $this->belongsToMany(Notification::class);
    }
    public function print_details(){
        return $this->belongsToMany(Print_detail::class);
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function timeslot(){
        return $this->belongsToMany(Timeslot::class);
    }
    protected $guarded = [];
}
