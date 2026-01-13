<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductTable extends Model
{
    protected $guarded = [];
    protected $table = "product_tables";

    public function createProducts($incomingFields){
        return $this->create($incomingFields);
    }

    public function getAllProducts(){
        return $this->all();
    }

    public function deleteProducts($id){
        $product = $this->find($id);

        return $product->delete();
    }

    public function SaveProducts($incomingFields, $id){
        $product = $this->find($id);

        return $product->update($incomingFields);
    }

    public function getProducts($id){
        return $this->find($id);
    } 

    public function FindFeatured(){
        return $this->where('featured', 'Yes')->get();
    }

}
