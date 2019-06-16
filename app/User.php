<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name', 'email', 'password', 'roles'
    ];
    protected $dates = ['deleted_at'];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
    public function mengajar(){
        return $this->hasMany('App\Mengajar');
    }
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

}
