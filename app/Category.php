<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tblcategory';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name'];

    public function getIdAttribute(){
        return $this->attributes['category_id'];
    }
    public function product() {
        return $this->hasMany('App\Product','product_category_id','category_id');
    }
}
