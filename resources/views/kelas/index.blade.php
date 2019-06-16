@extends('layouts.global')
@section('title') DAFTAR KELAS @endsection
@section('content')
    @if(session('status'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    {{session('status')}}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('kelas.index')}}">
                <div class="input-group">
                    <input
                            type="text"
                            class="form-control"
                            placeholder="Filter by Nama"
                            value="{{Request::get('nama')}}"
                            name="nama">
                    <div class="input-group-append">
                        <input
                                type="submit"
                                value="Filter"
                                class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="
{{route('siswa.index')}}">Published</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="
{{route('siswa.trash')}}">Trash</a>
                </li>
                <li>
                    <a href="kelas/create"
                       class="btn btn-success">Tambah + </a></li>
            </ul>
        </div>
    </div>
    <hr class="my-3">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered table-stripped">

                <thead>
                <tr>
                    <th><b>NO</b></th>
                    <th><b>Nama Kelas</b></th>
                    <th><b>Walikelas</b></th>
                    <th><b>Tahun Ajaran</b></th>
                    <th><b>Actions</b></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($kelas as $kelas)
                    @php
                        $wali = DB::table('peg_walikelas')
                        ->where('id_walikelas', '=', $kelas->id_walikelas)->get();

                        foreach ($wali as $wali)


                    @endphp
                    <tr>
                        <td>{{$kelas->id_kelas}}</td>
                        <td>{{$kelas->nama_kelas}}</td>
                        <td>{{$wali->nama_walikelas}}</td>
                        <td>{{$kelas->id_TA}}</td>

                        <td>
                            <a
                                    {{--href="{{route('siswa.edit', ['id' => $siswas->id_siswa])}}"--}}
                                    class="btn btn-info btn-sm"> Edit </a>

                            <a
                                    {{--href="{{route('siswa.show', ['id' => $siswas->id_siswa])}}"--}}
                                    class="btn btn-primary btn-sm"> Kelola Siswa </a>


                            <form
                                    class="d-inline"
                                    {{--action="{{route('siswa.destroy', ['id' => $siswas->id_siswa])}}"--}}
                                    method="POST"
                                    onsubmit="return confirm('Move Siswa to trash?')"
                            >
                                @csrf
                                <input
                                        type="hidden"
                                        value="DELETE"
                                        name="_method">

                                <input
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        value="Trash">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colSpan="10">
                        {{--{{$kelas->appends(Request::all())->links()}}--}}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection