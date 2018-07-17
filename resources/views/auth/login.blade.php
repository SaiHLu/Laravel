@extends('layout.master')

@section('title', 'Login Page')

@section('content')
    <div class="container">
        <div class="row col-md-8 col-md-offset-2">

            @foreach($errors->all() as $error)
                <p class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ $error }}
                </p>
            @endforeach

            <div class="well">
                <form method="post">

                    <legend>Login Form</legend>
                    <!--input type="hidden" name="_token" value=""-->
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Password">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="remember" name="remember"> Remember Me
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection