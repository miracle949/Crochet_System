<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User_tbl extends Authenticatable
{
    protected $guarded = [];

    protected $table = "user_tbls";

    public function UserCreate($incomingFields){
        return $this->create($incomingFields);
    }
}
