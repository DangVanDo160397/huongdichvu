<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'tblarticle';
    protected $primaryKey = 'article_id';

    public function getIdAttribute(){
        return $this->attributes['article_id'];
    }
    protected $fillable = ['article_title','article_content','article_description',
        'article_vote','article_image','article_product_id','article_enable','article_slug_nameWWWW'];

    public function product() {
        return $this->belongsTo('App\Product','article_product_id','product_id');
    }

}
