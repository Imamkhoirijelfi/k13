@extends('layouts.global')
@section('title') Edit Siswa @endsection
@section('content')
    <div class="col-md-8">
        <form
                action="{{route('siswa.update', ['id' => $siswa->id_siswa])}}"
                enctype="multipart/form-data"
                method="POST"
                class="bg-white shadow-sm p-3"
        >
            @csrf
            <input
                    type="hidden"
                    value="PUT"
                    name="_method">

            <label>NIS</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->NIS}}"
                    name="nis"/>
            <br>
            <label>NISN</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->NISN}}"
                    name="nisn"/>
            <br>
            <label>NAMA</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->NAMA}}"
                    name="nama"/>
            <br>
            <label>Tempat Lahir</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->TEMPAT_LAHIR}}"
                    name="tempatlahir"/>
            <br>
            <label>Tanggal Lahir</label><br>
            <input
                    type="date"
                    class="form-control"
                    value="{{$siswa->TANGGAL_LAHIR}}"
                    name="tgllahir"/>
            <br>
            <label>Jenis Kelamin</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->JENIS_KELAMIN}}"
                    name="jk"/>
            <br>
            <label>Agama</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->AGAMA}}"
                    name="agama"/>
            <br>
            <label>Pendidikan Sebelumnya</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->PENDIDIKAN_SEBELUMNYA}}"
                    name="pendidikansebelumnya"/>
            <br>
            <label>Tinggi Badan Siswa 1</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->TINGGI_BADAN_1}}"
                    name="tbadan1"/>
            <br>
            <label>Tinggi Badan Siswa 2</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->TINGGI_BADAN_2}}"
                    name="tbadan2"/>
            <br>
            <label>Berat Badan Siswa 1</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->BERAT_BADAN_1}}"
                    name="bbadan1"/>
            <br>
            <label>Berat Badan Siswa 2</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->BERAT_BADAN_2}}"
                    name="bbadan2"/>
            <br>
            <label>Sakit</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->SAKIT}}"
                    name="sakit"/>
            <br>
            <label>Izin</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->IZIN}}"
                    name="izin"/>
            <br>
            <label>Tanpa Keterangan</label><br>
            <input
                    type="number"
                    class="form-control"
                    value="{{$siswa->TANPA_KETERANGAN}}"
                    name="alfa"/>
            <br>
            <label>Alamat</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->ALAMAT}}"
                    name="alamat"/>
            <br>
            <label>Nama Ayah</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->NAMA_AYAH}}"
                    name="namaayah"/>
            <br>
            <label>Nama Ibu</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->NAMA_IBU}}"
                    name="namaibu"/>
            <br>
            <label>Pekerjaan Ayah</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->PEKERJAAN_AYAH}}"
                    name="payah"/>
            <br>
            <label>Pekerjaan Ibu</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->PEKERJAAN_IBU}}"
                    name="pibu"/>
            <br>
            <label>Alamat Orang Tua</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->ALAMAT_ORTU_JALAN}}"
                    name="alamatortu"/>
            <br>
            <label>Nama Wali</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->NAMA_WALI}}"
                    name="namawali"/>
            <br>
            <label>Pekerjaan Wali</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$siswa->PEKERJAAN_WALI}}"
                    name="pwali"/>
            <br><br>
            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection