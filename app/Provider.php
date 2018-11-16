<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'tblprovider';
    protected $primaryKey = 'provider_id';

    public function getIdAttribute(){
        return $this->attributes['provider_id'];
    }
    protected $fillable = ['provider_name','provider_address','provider_phone'];

    public function product() {
        return $this->hasMany('App\Product','product_provider_id','provider_id');
    }
}
