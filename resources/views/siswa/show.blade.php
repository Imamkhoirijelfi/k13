@extends('layouts.global')
@section('title') Detail Siswa @endsection
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <label><b>NIS </b></label><br>

                {{$siswa->NIS}}
                <br>

                <label><b>NISN </b></label><br>

                        {{$siswa->NISN}}
                <br>
                <label><b>NAMA</b></label><br>

                        {{$siswa->NAMA}}
                <br>
                <label><b> TEMPAT_LAHIR</b></label><br>

                        {{$siswa->TEMPAT_LAHIR}}
                <br>
                <label><b> TANGGAL_LAHIR</b></label><br>

                        {{$siswa->TANGGAL_LAHIR}}
                <br>
                <label><b> JENIS_KELAMIN</b></label><br>

                        {{$siswa->JENIS_KELAMIN}}
                <br>
                <label><b> AGAMA</b></label><br>

                        {{$siswa->AGAMA}}
                <br>
                <label><b> PENDIDIKAN_SEBELUMNYA</b></label><br>

                        {{$siswa->PENDIDIKAN_SEBELUMNYA}}
                <br>
                <label><b> TINGGI_BADAN_1</b></label><br>

                        {{$siswa->TINGGI_BADAN_1}}
                <br>
                <label><b> TINGGI_BADAN_2</b></label><br>

                        {{$siswa->TINGGI_BADAN_2}}
                <br>
                <label><b> BERAT_BADAN_1</b></label><br>

                        {{$siswa->BERAT_BADAN_1}}
                <br>
                <label><b> BERAT_BADAN_2</b></label><br>

                        {{$siswa->BERAT_BADAN_2}}
                <br>
                <label><b> SAKIT</b></label><br>

                        {{$siswa->SAKIT}}
                <br>
                <label><b> IZIN</b></label><br>

                        {{$siswa->IZIN}}
                <br>
                <label><b> TANPA_KETERANGAN</b></label><br>

                {{$siswa->TANPA_KETERANGAN}}
                <br>
                <label><b> ALAMAT</b></label><br>

                        {{$siswa->ALAMAT}}
                <br>
                <label><b> NAMA_AYAH</b></label><br>

                        {{$siswa->NAMA_AYAH}}
                <br>
                <label><b> NAMA_IBU</b></label><br>

                        {{$siswa->NAMA_IBU}}
                <br>
                <label><b> PEKERJAAN_AYAH</b></label><br>

                        {{$siswa->PEKERJAAN_AYAH}}
                <br>
                <label><b> PEKERJAAN_IBU</b></label><br>

                    {{$siswa->PEKERJAAN_IBU}}
                <br>
                <label><b> ALAMAT_ORTU_JALAN</b></label><br>

                     {{$siswa->ALAMAT_ORTU_JALAN}}
                <br>
                <label><b> NAMA_WALI</b></label><br>

                        {{$siswa->NAMA_WALI}}
                <br>
                <label><b> PEKERJAAN_WALI</b></label><br>
                       {{$siswa->PEKERJAAN_WALI}}
                <br>
            </div>
        </div>
    </div>
@endsection
