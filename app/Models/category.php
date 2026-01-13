<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductTable;

class category extends Model
{
    protected $guarded = [];

    protected $table = "categories";

    public function add_category_table($incomingFields){

        return $this->create($incomingFields);

    }

    public function get_all_category(){
        return $this->all();
    }

    public function DeleteCategories($id){
        $category = $this->find($id);

        return $category->delete();
    }
}
