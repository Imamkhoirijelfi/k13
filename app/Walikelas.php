<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Walikelas extends Model
{
    protected $table = "peg_walikelas";
    protected $primaryKey = 'id_walikelas';
    protected $fillable = ["nama_walikelas","nip"];
    protected $dates = ['deleted_at'];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
    use SoftDeletes;
}
