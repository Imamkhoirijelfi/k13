<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    protected $table = "peg_mengajar";
    protected $primaryKey = 'id';
    protected $fillable = ["user_id","id_kelas","id_mapel"];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo()("App\User");
    }

}
