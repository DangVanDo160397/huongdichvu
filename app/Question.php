<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'tblquestion';
    protected $primaryKey = 'question_id';

    public function getIdAttribute(){
        return $this->attributes['question_id'];
    }
    protected $fillable = ['question_name','question_content','question_user_id','question_expert_id','question_parent_id'];

    public function user(){
        $this->belongsTo('App\User','question_user_id','user_id');
    }
    public function expert() {
        $this->belongsTo('App\Expert','question_expert_id','expert_id');
    }
}
