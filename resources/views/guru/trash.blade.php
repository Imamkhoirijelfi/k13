@extends('layouts.global')
@section('title') DAFTAR NAMA GURU @endsection
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
            <form action="{{route('guru.index')}}">
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
{{route('guru.index')}}">Published</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active " href="
{{route('guru.trash')}}">Trash</a>
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
                @foreach ($guru as $gurus)
                    <tr>
                        <td>{{$gurus->id}}</td>
                        <td>{{$gurus->nama_guru}}</td>
                        <td>{{$gurus->nip_guru}}</td>
                        <td>
                            <a href="{{route('guru.restore', ['id' => $gurus->id])}}"
                               class="btn btn-success">Restore</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colSpan="10">
                        {{$guru->appends(Request::all())->links()}}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection