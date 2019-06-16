<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guru = \App\Guru::paginate(5);

        $filterguru = $request->get('nama');
        if($filterguru) {
            $guru = \App\Guru::where("NAMA", "%$filterguru%")->paginate(5);
        }
        return view('guru.index', ['guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_user = new \App\User();
        $new_user->name = $request->get('nama');
        $new_user->email = $request->get('email');
        $new_user->password = \Hash::make($request->get('password'));
        $new_user->roles = $request->get('roles');
        $new_user->save();
        $LastInsertId = $new_user->id;

        $new_guru = new \App\Guru();
        $new_guru->id=$LastInsertId;
        $new_guru->nama_guru = $request->get('nama');
        $new_guru->nip_guru = $request->get('nip');
        $new_guru->save();
        return redirect()->route('guru.create')->with('status','guru Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $guru_edit = \App\Guru::FindOrFail($id);
        return view('guru.edit',['guru' => $guru_edit]);


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

        $nama = $request->get('nama');
        $nip = $request->get('nip');


        $guru = \App\Guru::findOrFail($id);

        $guru->nama_guru = $nama;
        $guru->nip_guru = $nip;





        $guru->save();
        return redirect()->route('guru.index', ['id' => $id])->with('status',
            'Guru succesfully update');
    }
    public function editpassword($id)
    {
        $user = \App\User::FindOrFail($id);
        return view('guru.editpassword',['user' => $user]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = \App\Guru::findOrFail($id);
        $user =\App\UserModel::findOrFail($id);
        $guru->delete();
        $user->delete();


        return redirect()->route('guru.index')->with('status', 'Guru Berhasil Dihapus');
    }

    public function trash(){
        $deleted_guru
            = \App\Guru::onlyTrashed()->paginate(10);
        return view('guru.trash', ['guru' => $deleted_guru]);
    }

    public function restore($id){
        $guru = \App\Guru::withTrashed()->findOrFail($id);
        $user = \App\UserModel::withTrashed()->findOrFail($id);
        if($guru->trashed()&&$user->trashed()){
            $guru->restore();
            $user->restore();
        } else {
            return redirect()->route('guru.index')
                ->with('status', 'Guru is not in trash');
        }
        return redirect()->route('guru.index')
            ->with('status', 'guru successfully restored');
    }
}
