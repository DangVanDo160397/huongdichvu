<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'tblrole';
    protected $primaryKey = 'role_id';

    public function getIdAttribute(){
        return $this->attributes['role_id'];
    }
    protected $fillable = ['role_name'];

    public function user() {
        return $this->hasMany('App\User','user_level','role_id');
    }
}
