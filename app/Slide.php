<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'tblslide';
    protected $primaryKey = 'slide_id';

    public function getIdAttribute(){
        return $this->attributes['slide_id'];
    }
    protected $fillable = ['slide_name','slide_image','slide_link'];


}
