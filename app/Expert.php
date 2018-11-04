<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $table = 'tblexpert';
    protected $primaryKey = 'expert_id';

    public function getIdAttribute(){
        return $this->attributes['expert_id'];
    }
    protected $fillable = ['expert_name','expert_address','expert_birth',
        'expert_email','expert_password','expert_degree',
        'expert_image','expert_level','expert_parent_id'];

}
