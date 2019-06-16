<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
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
}
