@extends('layout.master')

@section('title', 'Edit User')

@section('content')
    <div class="container">

        <div class="col-md-8 col-md-offset-2">

            @if(session('status'))
                <p class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session('status')}}
                </p>
            @endif

            <div class="well">
                <form method="post">

                    <legend>Edit User's Roles</legend>
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="role">User Roles</label>
                        <select name="role[]" id="role" class="form-control" multiple>
                            @foreach($roles as $role)
                                <option value="{{$role->name}}"
                                        @if(in_array($role->name, $selectedRoles))
                                        selected="selected"
                                        @endif
                                >
                                    {{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>

                </form>

            </div>
        </div>

    </div>
@endsection