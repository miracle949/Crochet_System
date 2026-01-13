<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class featured_products extends Model
{
    public function getAllFeatured(){
        return $this->all();
    }
}
