<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblParent extends Model
{
    protected $table = 'tblparent';
    protected $primaryKey = 'parent_id';
    protected $fillable = ['parent_name'];

    public function getIdAttribute(){
        return $this->attributes['parent_id'];
    }
    public function category() {
        $this->hasMany('App\Category','category_parent_id','parent_id');
    }
    public function product() {
        return $this->hasManyThrough('App\TblParent','App\Category','category_parent_id','product_category_id','product_id');
    }
}
