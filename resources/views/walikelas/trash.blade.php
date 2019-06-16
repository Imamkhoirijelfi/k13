@extends('layouts.global')
@section('title') DAFTAR NAMA Walikelas @endsection
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
            <form action="{{route('walikelas.index')}}">
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
                    <a class="nav-link " href="
{{route('walikelas.index')}}">Published</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="
{{route('walikelas.trash')}}">Trash</a>
                </li>
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
                    <th><b>nama</b></th>
                    <th><b>NIP</b></th>

                    <th><b>Actions</b></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($wali as $walis)

                    <tr>
                        <td>{{$walis->id_walikelas}}</td>
                        <td>{{$walis->nama_walikelas}}</td>
                        <td>{{$walis->nip}}</td>

                        <td>
                            <a href="{{route('walikelas.restore', ['id' => $walis->id_walikelas])}}"
                               class="btn btn-success">Restore</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colSpan="10">
                        {{$wali->appends(Request::all())->links()}}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection