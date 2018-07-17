@extends('layout.master')

@section('title', 'Create Category')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            @if(session('status'))
                <p class="alert alert-dismissible alert-success">
                    <button class="close" data-dismiss="alert">&times;</button>
                    {{session('status')}}
                </p>
            @endif

            @if($errors->all())
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger alert-dismissible">
                        <button class="close" data-dismiss="alert">&times;</button>
                        {{$error}}
                    </p>
                @endforeach
            @endif
            <div class="well">
                <form method="post">
                    <legend>Create Category</legend>
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Category Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>

        </div>
    </div>
@endsection