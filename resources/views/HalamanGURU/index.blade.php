@extends('layouts.global')
@section('title') DAFTAR NAMA SISWA @endsection
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
            <form action="{{route('HalamanGURU.index')}}">
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
        <div class="col-md-auto">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    {{--<a class="nav-link active" href="--}}
{{--{{route(HalamanGURUU.mengajar.index')}}">Published</a>--}}
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="
{{route('siswa.trash')}}">Trash</a>
                </li>
                <li>
                    <a href="siswa/create"
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
                    <th><b>No</b></th>
                    <th><b>Kelas</b></th>
                    <th><b>Mata Pelajaran</b></th>
                    <th><b>Actions</b></th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 0;?>
                @foreach ($mengajar as $mengajars)
                    <?php $no++ ;?>
                    @php
                    $kelas = DB::table('peg_kelas')
                    ->where('id_kelas', '=', $mengajars->id_kelas)->get();
                    $mapel = DB::table('peg_mapel')
                    ->where('id_mapel','=', $mengajars->id_mapel)->get();

                    foreach ($kelas as $kelass)
                    foreach ($mapel as $mapels)

                    @endphp
                    <tr>

                        <td colspan="1"><center>{{$no}}</center></td>
                        <td ><a href="home" >{{$kelass->nama_kelas}}</a> <br>
                            <a
                                    {{--href="{{route('siswa.edit', ['id' => $siswas->id_siswa])}}"--}}
                                    class="btn btn-light btn-sm"> Daftar Siswa </a>
                        </td>
                        <td>{{$mapels->MATA_PELAJARAN}} <br>
                            <a
                                    {{--href="{{route('siswa.edit', ['id' => $siswas->id_siswa])}}"--}}
                                    class="btn btn-light btn-sm"> KD </a>
                        </td>
                        <td>
                            <a
                                    {{--href="{{route('siswa.edit', ['id' => $siswas->id_siswa])}}"--}}
                                    class="btn btn-info btn-sm"> Edit </a>



<br>

                            <form
                                    {{--class="d-inline"--}}
                                    {{--action="{{route('siswa.destroy', ['id' => $siswas->id_siswa])}}"--}}
                                    {{--method="POST"--}}
                                    {{--onsubmit="return confirm('Move Siswa to trash?')"--}}
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
                        {{--{{$mengajar->appends(Request::all())->links()}}--}}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection