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
}
