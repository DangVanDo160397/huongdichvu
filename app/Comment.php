<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'tblcomment';

    protected $primaryKey = 'comment_id';

    public function getIdAttribute(){
        return $this->attributes['comment_id'];
    }

}
