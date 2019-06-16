<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $siswa = \App\Siswa::paginate(5);


        $filtersiswa = $request->get('nama');
        if($filtersiswa) {
            $siswa = \App\Siswa::where("NAMA", "%$filtersiswa%")->paginate(5);
        }
        return view('siswa.index', ['siswa' => $siswa]);
    }
    public function trash(){
        $deleted_siswa
            = \App\Siswa::onlyTrashed()->paginate(10);
        return view('siswa.trash', ['siswa' => $deleted_siswa]);
    }

    public function restore($id){
        $siswa = \App\Siswa::withTrashed()->findOrFail($id);
        if($siswa->trashed()){
            $siswa->restore();
        } else {
            return redirect()->route('siswa.index')
                ->with('status', 'siswa is not in trash');
        }
        return redirect()->route('siswa.index')
            ->with('status', 'siswa successfully restored');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_siswa = new \App\Siswa();
        $new_siswa->NIS = $request->get('nis');
        $new_siswa-> NISN = $request->get('nisn');
        $new_siswa-> NAMA = $request->get('nama');
        $new_siswa->TEMPAT_LAHIR = $request->get('tempatlahir');
        $new_siswa->TANGGAL_LAHIR = $request->get('tgllahir');
        $new_siswa-> JENIS_KELAMIN = $request->get('jk');
        $new_siswa-> AGAMA = $request->get('agama');
        $new_siswa-> PENDIDIKAN_SEBELUMNYA = $request->get('pendidikansebelumnya');
        $new_siswa-> ALAMAT = $request->get('alamat');
        $new_siswa-> NAMA_AYAH = $request->get('namaayah');
        $new_siswa->NAMA_IBU = $request->get('namaibu');
        $new_siswa-> PEKERJAAN_AYAH = $request->get('payah');
        $new_siswa-> PEKERJAAN_IBU = $request->get('pibu');
        $new_siswa-> ALAMAT_ORTU_JALAN = $request->get('alamatortu');
        $new_siswa-> NAMA_WALI = $request->get('namawali');
        $new_siswa-> PEKERJAAN_WALI = $request->get('pwali');
        $new_siswa->ALAMAT_WALI = $request->get('alamatwali');
        $new_siswa-> TINGGI_BADAN_1 = $request->get('tbadan1');
        $new_siswa->TINGGI_BADAN_2= $request->get('tbadan2');
        $new_siswa-> BERAT_BADAN_1 = $request->get('bbadan1');
        $new_siswa-> BERAT_BADAN_2 = $request->get('bbadan2');
        $new_siswa-> SAKIT = $request->get('sakit');
        $new_siswa-> IZIN = $request->get('izin');
        $new_siswa-> TANPA_KETERANGAN = $request->get('alfa');
        $new_siswa-> created_by = \Auth::user()->id;

        $new_siswa->save();

        return redirect()->route('siswa.create')->with('status','Siswa Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = \App\Siswa::findOrFail($id);

        return view('siswa.show', ['siswa' => $siswa ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa_edit = \App\Siswa::findOrFail($id);
        return view('siswa.edit', ['siswa' => $siswa_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $NIS = $request->get('nis');
        $NISN = $request->get('nisn');
        $NAMA = $request->get('nama');
        $TEMPAT_LAHIR = $request->get('tempatlahir');
        $TANGGAL_LAHIR = $request->get('tgllahir');
        $JENIS_KELAMIN = $request->get('jk');
        $AGAMA = $request->get('agama');
        $PENDIDIKAN_SEBELUMNYA = $request->get('pendidikansebelumnya');
        $ALAMAT = $request->get('alamat');
        $NAMA_AYAH = $request->get('namaayah');
        $NAMA_IBU = $request->get('namaibu');
        $PEKERJAAN_AYAH = $request->get('payah');
         $PEKERJAAN_IBU = $request->get('pibu');
        $ALAMAT_ORTU_JALAN = $request->get('alamatortu');
        $NAMA_WALI = $request->get('namawali');
        $PEKERJAAN_WALI = $request->get('pwali');
        $ALAMAT_WALI = $request->get('alamatwali');
        $TINGGI_BADAN_1 = $request->get('tbadan1');
        $TINGGI_BADAN_2= $request->get('tbadan2');
        $BERAT_BADAN_1 = $request->get('bbadan1');
        $BERAT_BADAN_2 = $request->get('bbadan2');
        $SAKIT = $request->get('sakit');
        $IZIN = $request->get('izin');
        $TANPA_KETERANGAN = $request->get('alfa');

        $siswa = \App\Siswa::findOrFail($id);

        $siswa->NIS = $NIS;
        $siswa->NISN = $NISN;
        $siswa->NAMA = $NAMA;
        $siswa->TEMPAT_LAHIR = $TEMPAT_LAHIR;
        $siswa->TANGGAL_LAHIR = $TANGGAL_LAHIR;
        $siswa->JENIS_KELAMIN = $JENIS_KELAMIN;
        $siswa->AGAMA = $AGAMA;
        $siswa->PENDIDIKAN_SEBELUMNYA = $PENDIDIKAN_SEBELUMNYA;
        $siswa->ALAMAT = $ALAMAT;
        $siswa->NAMA_AYAH = $NAMA_AYAH;
        $siswa->NAMA_IBU = $NAMA_IBU;
        $siswa->PEKERJAAN_AYAH = $PEKERJAAN_AYAH;
        $siswa->PEKERJAAN_IBU = $PEKERJAAN_IBU;
        $siswa->ALAMAT_ORTU_JALAN = $ALAMAT_ORTU_JALAN;
        $siswa->NAMA_WALI = $NAMA_WALI;
        $siswa->PEKERJAAN_WALI = $PEKERJAAN_WALI;
        $siswa->ALAMAT_WALI = $ALAMAT_WALI;
        $siswa->TINGGI_BADAN_1 = $TINGGI_BADAN_1;
        $siswa->TINGGI_BADAN_2 = $TINGGI_BADAN_2;
        $siswa->BERAT_BADAN_1 = $BERAT_BADAN_1;
        $siswa->BERAT_BADAN_2 = $BERAT_BADAN_2;
        $siswa->SAKIT = $SAKIT;
        $siswa->IZIN = $IZIN;
        $siswa->TANPA_KETERANGAN = $TANPA_KETERANGAN;
        $siswa->updated_by = \Auth::User()->id;




        $siswa->save();
        return redirect()->route('siswa.index', ['id' => $id])->with('status',
            'Siswa succesfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = \App\Siswa::findOrFail($id);
        $siswa->delete();


        return redirect()->route('siswa.index')->with('status', 'Siswa Berhasil Dihapus');
    }
}
