<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    protected $table = "peg_kelas";
    protected $primaryKey = 'id_kelas';
//    protected $fillable = ["NIS","NISN","NAMA","id_kelas","TEMPAT_LAHIR","TANGGAL_LAHIR","JENIS_KELAMIN","AGAMA","PENDIDIKAN_SEBELUMNYA","ALAMAT","NAMA_AYAH","NAMA_IBU","PEKERJAAN_AYAH","PEKERJAAN_IBU","ALAMAT_ORTU_JALAN","NAMA_WALI","PEKERJAAN_WALI","ALAMAT_WALI","TINGGI_BADAN_1","TINGGI_BADAN_2","BERAT_BADAN_1","BERAT_BADAN_2","SAKIT","IZIN","TANPA_KETERANGAN"];
    protected $dates = ['deleted_at'];
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
    use SoftDeletes;
}
