@extends('layout.master')

@section('title', 'Edit Category')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            @if(session('status'))
                <p class="alert alert-success alert-dismissible">
                    <button class="close" type="button" data-dismiss="alert">x</button>
                    {{session('status')}}
                </p>
            @endif

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger alert-dismissible">
                        <button class="close" type="button" data-dismiss="alert">&times;</button>
                        {{$error}}
                    </p>
                @endforeach
            <div class="well">

                <form method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection