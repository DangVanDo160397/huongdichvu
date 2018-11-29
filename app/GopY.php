<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GopY extends Model
{
    protected $table = 'tblgopy';
    protected $primaryKey = 'gopy_id';

    public function getIdAttribute(){
        return $this->attributes['gopy_id'];
    }
    protected $fillable = ['gopy_hoten','gopy_email','gopy_noidung',
        ];

    public function product() {
        return $this->belongsTo('App\Product','article_product_id','product_id');
    }
}
