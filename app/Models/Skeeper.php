<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skeeper extends Model
{
    use HasFactory;
    public function pcenter(){
        return $this->belongsTo(Pcenter::class);
    }
    public function orders(){
        return $this->hasOne(Order::class);
    }
    public function notifications(){
        return $this->belongsToMany(Notification::class);
    }

    public function user()
    {
       return $this->hasOne(User::class);
    }
    protected $guarded = [];

    protected $table = 'skeepers';

}
