<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tblcategory';//khai báo bảng trong cơ sở dữ liệu
    protected $primaryKey = 'category_id';//khai báo khóa chính
    protected $fillable = ['category_name','category_parent_id'];//khai báo các trường

    public function getIdAttribute(){
        return $this->attributes['category_id'];
    }
    public function product() {
        $this->hasMany('App\Category','product_category_id','category_id');
    }//các quan hệ của các bảng khác
    public function parent() {
        return $this->belongsTo('App\TblParent','category_parent_id','parent_id');
    }
}

