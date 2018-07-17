@extends('layout.master')

@section('title', 'Create Role')

@section('content')
    <div class="container">
        <div class="row col-md-8 col-md-offset-2">

            @foreach($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert">&times;</button>
                    {{$error}}
                </p>
            @endforeach

            @if(session('status'))
                <p class="alert alert-success alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert">&times;</button>
                    {{session('status')}}
                </p>
            @endif

            <div class="well">

                <form method="post">

                    <legend>Insert Role</legend>
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="role" name="role">
                    </div>

                    <button class="btn btn-primary" type="submit">Insert</button>

                </form>

            </div>

        </div>
    </div>
@endsection