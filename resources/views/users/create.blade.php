
@extends("layouts.global")
@section("title") Create New User @endsection
@section("content")
    <div class="col-md-8">
        <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('users.store')}}"
                method="POST">
            @csrf
            <label for="name">Nama</label>
            <input
                    class="form-control"
                    placeholder="Full Name"
                    type="text"
                    name="name"
                    id="nama"/>
            <br>
            <label for="username">NIP/NIK</label>
            <input
                    class="form-control"
                    placeholder="username"
                    type="text"
                    name="username"
                    id="nip"/>
            <br>
            <label for="">Roles</label>
            <br>
            <input
                    type="checkbox"
                    name="roles[]"
                    id="ADMIN"
                    value="ADMIN">
            <label for="ADMIN">Administrator</label>
            <input
                    type="checkbox"
                    name="roles[]"
                    id="STAFF"
                    value="STAFF">
            <label for="STAFF">Guru</label>
            <input
                    type="checkbox"
                    name="roles[]"
                    id="CUSTOMER"
                    value="CUSTOMER">
            <label for="CUSTOMER">Wali Kelas</label>
            <br>
            <br>
            <label for="email">Email</label>
            <input
                    class="form-control"
                    placeholder="user@mail.com"
                    type="text"
                    name="email"
                    id="email"/>
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
                    class="btn btn-primary"
                    type="submit"
                    value="Save"/>
        </form>
    </div>
@endsection