@extends('layouts.global')
@section('title') Edit Guru @endsection
@section('content')
    <div class="col-md-8">
        <form
                action="{{route('users.update', ['id' =>$user->id])}}"
                enctype="multipart/form-data"
                method="POST"
                class="bg-white shadow-sm p-3"
        >
            @csrf
            <input
                    type="hidden"
                    value="PUT"
                    name="_method">

            <label>Email</label><br>
            <input
                    type="text"
                    class="form-control"
                    value="{{$user->email}}"
                    name="email"/>
            <br>

            <input
                    type="text"
                    class="form-control"
                    value="{{$user->password}}"
                    name="password"/>
            <br>

            <br>

            <input type="submit" class="btn btn-primary" value="Update">
        </form>
    </div>
@endsection