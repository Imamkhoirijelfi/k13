<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    protected $table = "peg_guru";
    protected $primaryKey = 'id';
    protected $fillable = ["nama_guru","nip_guru"];
    protected $dates = ['deleted_at'];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
    public function mengajar(){
        return $this->hasMany("App\Mengajar");
    }
    use SoftDeletes;


}
