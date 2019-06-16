@extends('layouts.global')
@section('title') Create Siswa @endsection
@section('content')
    <div class="col-md-8">
        <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('siswa.store')}}"
                method="POST">
            @csrf
            <label>NIS</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="nis"/>
            <br>
            <label>NISN</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="nisn"/>
            <br>
            <label>NAMA</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="nama"/>
            <br>
            <label>Tempat Lahir</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="tempatlahir"/>
            <br>
            <label>Tanggal Lahir</label><br>
            <input
                    type="date"
                    class="form-control"
                    name="tgllahir"/>
            <br>
            <label>Jenis Kelamin</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="jk"/>
            <br>
            <label>Agama</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="agama"/>
            <br>
            <label>Pendidikan Sebelumnya</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="pendidikansebelumnya"/>
            <br>
            <label>Tinggi Badan Siswa 1</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="tbadan1"/>
            <br>
            <label>Tinggi Badan Siswa 2</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="tbadan2"/>
            <br>
            <label>Berat Badan Siswa 1</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="bbadan1"/>
            <br>
            <label>Berat Badan Siswa 2</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="bbadan2"/>
            <br>
            <label>Sakit</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="sakit"/>
            <br>
            <label>Izin</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="izin"/>
            <br>
            <label>Tanpa Keterangan</label><br>
            <input
                    type="number"
                    class="form-control"
                    name="alfa"/>
            <br>
            <label>Alamat</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="alamat"/>
            <br>
            <label>Nama Ayah</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="namaayah"/>
            <br>
            <label>Nama Ibu</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="namaibu"/>
            <br>
            <label>Pekerjaan Ayah</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="payah"/>
            <br>
            <label>Pekerjaan Ibu</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="pibu"/>
            <br>
            <label>Alamat Orang Tua</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="alamatortu"/>
            <br>
            <label>Nama Wali</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="namawali"/>
            <br>
            <label>Pekerjaan Wali</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="pwali"/>
            <br>
            <input
                    type="submit"
                    class="btn btn-primary"
                    value="Save"/>
        </form>
    </div>
@endsection