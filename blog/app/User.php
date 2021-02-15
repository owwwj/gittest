<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use Notifiable;
        public $table = 'blog_user';
   
        public $primaryKey = 'id';
    protected $fillable = [
        'username', 'password'
    ];
    public $timestamps = false;
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
