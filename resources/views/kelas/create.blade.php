@extends('layouts.global')
@section('title') Create Siswa @endsection
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
    <div class="col-md-8">
        <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('kelas.store')}}"
                method="POST">
            @csrf
            <label>Nama Kelas</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="nama"/>
            <br>
            <label>Walikelas</label><br>
            <select class="form-control" id="id_wali" data-placeholder="Pilih Walikelas" name="id_wali" >
                <?php foreach ( $wali as $wali) : ?>
                    <option value="@php echo $wali->id_walikelas;@endphp"> <?= $wali->nama_walikelas;?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label>Tahun Ajaran</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="id_ta"/>
            <br>
            <input
                    type="submit"
                    class="btn btn-primary"
                    value="Save"/>
        </form>
    </div>
@endsection