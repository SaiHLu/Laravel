@extends('layout.master')

@section('title', 'Register')

@section('content')
<div class="row col-md-8 col-md-offset-2">

    @foreach($errors->all() as $error)
        <p class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $error }}</p>
    @endforeach

    <div class="well">

        <form method="post">

            <legend>Register Form</legend>
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="User Name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Type Password Again">
            </div>

            <button type="submit" class="btn btn-info pull-right">Submit</button>

            <div class="clearfix"></div>
        </form>

    </div>
</div>
@endsection