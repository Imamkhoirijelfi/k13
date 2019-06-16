@extends('layouts.global')
@section('title') Create Walikelas @endsection
@section('content')
    <div class="col-md-8">
        <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('walikelas.store')}}"
                method="POST">
            @csrf
            <label>Nama</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="nama"/>
            <br>
            <label>NIP/NIK</label><br>
            <input
                    type="text"
                    class="form-control"
                    name="nip"/>
            <br>
            <label>Email</label><br>
            <input
                    type="email"
                    class="form-control"
                    name="email"/>
            <br>

            <input
                    type="hidden"
                    name="roles"
                    id="WALIKELAS"
                    value="WALIKELAS">


            <br>
            <label for="password">Password</label>
            <input
                    class="form-control"
                    placeholder="password"
                    type="password"
                    name="password"
                    id="password"/>
            <br>
            <label for="password_confirmation">Password Confirmation</label>
            <input
                    class="form-control"
                    placeholder="password confirmation"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"/>
            <br>
            <input
                    type="submit"
                    class="btn btn-primary"
                    value="Save"/>
        </form>
    </div>
@endsection