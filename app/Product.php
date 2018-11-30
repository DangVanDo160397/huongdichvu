<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tblproduct';
    protected $primaryKey = 'product_id';

    public function getIdAttribute(){
        return $this->attributes['product_id'];
    }
    protected $fillable = ['product_name','product_price','product_quantity',
                            'product_image','product_category_id','product_note','product_slug_name',
                            'product_enable','product_description','product_provider_id',
                            'product_content','product_manufacturing_date','product_expiry_date'];

    public function category() {
        return $this->belongsTo('App\Category','product_category_id','category_id');
    }

    public function provider() {
        return $this->belongsTo('App\Provider','product_provider_id','provider_id');
    }

    public function article() {
        return $this->hasMany('App\Article','article_product_id','product_id');
    }
}
