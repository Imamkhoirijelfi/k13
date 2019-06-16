@extends('layouts.global')
@section('title') Edit Guru @endsection
@section('content')
    <div class="col-md-8">
        <form
                action="{{route('walikelas.update', ['id' => $wali->id_walikelas])}}"
                enctype="multipart/form-data"
                method="POST"
                class="bg-white shadow-sm p-3"
        >
            @csrf
            <input
                    type="hidden"
                    value="PUT"
                    name="_method">

            <label>Nama</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$wali->nama_walikelas}}"
                    name="nama"/>
            <br>
            <label>NIP</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$wali->nip}}"
                    name="nip"/>
            <br>

            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection