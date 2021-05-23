@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputUserName">User Name</label>
                        <input type="text" name="username" id="inputUserName" class="form-control" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-default mt-5" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection
