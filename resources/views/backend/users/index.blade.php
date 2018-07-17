@extends('layout.master')

@section('title', 'All Users')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well bs-component">
            <h2 class="page-header text-center">User Lists</h2>
            <table class="table table-striped">

                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td><a href="{{action('admin\UserController@edit', $user->id)}}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection