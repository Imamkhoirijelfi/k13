<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class WalikelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $wali = \App\Walikelas::paginate(5);


        $filter = $request->get('nama');
        if($filter) {
            $wali = \App\Walikelas::where("NAMA", "%$filter%")->paginate(5);
        }
        return view('walikelas.index', ['wali' => $wali]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('walikelas.create');
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

        $new_wali = new \App\Walikelas();
        $new_wali->id_walikelas=$LastInsertId;
        $new_wali->nama_walikelas = $request->get('nama');
        $new_wali->nip = $request->get('nip');
        $new_wali->save();
        return redirect()->route('walikelas.create')->with('status','walikelas Berhasil Ditambahkan');

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

        $edit = \App\Walikelas::FindOrFail($id);
        return view('walikelas.edit',['wali' => $edit]);


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


        $wali = \App\Walikelas::findOrFail($id);

        $wali->nama_walikelas = $nama;
        $wali->nip = $nip;





        $wali->save();
        return redirect()->route('walikelas.index', ['id' => $id])->with('status',
            'Walikelas succesfully update');
    }
    public function editpassword($id)
    {
        $user = \App\User::FindOrFail($id);
        return view('walikelas.editpassword',['user' => $user]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali = \App\Walikelas::findOrFail($id);
        $user =\App\UserModel::findOrFail($id);
        $wali->delete();
        $user->delete();


        return redirect()->route('walikelas.index')->with('status', 'Walikelas Berhasil Dihapus');
    }

    public function trash(){
        $deleted = \App\Walikelas::onlyTrashed()->paginate(10);
        return view('walikelas.trash', ['wali' => $deleted]);
    }

    public function restore($id){
        $wali = \App\Walikelas::withTrashed()->findOrFail($id);
        $user = \App\UserModel::withTrashed()->findOrFail($id);
        if($wali->trashed()&&$user->trashed()){
            $wali->restore();
            $user->restore();
        } else {
            return redirect()->route('walikelas.index')
                ->with('status', 'Walikelas is not in trash');
        }
        return redirect()->route('walikelas.index')
            ->with('status', 'walikelas successfully restored');
    }
}
