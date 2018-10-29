<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tbluser';
    protected $primaryKey = 'user_id';

    public function getIdAttribute(){
        return $this->attributes['user_id'];
    }

    public function getAuthPassword()
    {
        return $this->user_password;
    }

    protected $fillable = [
        'user_name', 'user_email', 'user_password','user_address','user_image','user_level','user_gender','user_phone','user_age','user_note'
    ];

    public function role() {
        return $this->belongsTo('App\Role','user_level','role_id');
    }

    public function checkRole()
    {
        return $this->user_level < 5;
    }
}
