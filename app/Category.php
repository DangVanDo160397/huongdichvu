<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tblcategory';
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name','category_parent_id'];

    public function getIdAttribute(){
        return $this->attributes['category_id'];
    }

}
