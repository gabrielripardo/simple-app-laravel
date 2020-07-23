<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'category', 'description', 'image']; //Restringi os campos que podem ser preenchidos. S.I

    public function search($filter = null){
        $results = $this->where(function ($query) use($filter){
            if($filter){
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        })->paginate();

        //dd($results);
        return $results;
    }

}
