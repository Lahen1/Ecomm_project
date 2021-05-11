@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="login" method="POST">
                    <div class="form-group">
                        @csrf
                        <label for="inputEmail">Email address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-default mt-5" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
