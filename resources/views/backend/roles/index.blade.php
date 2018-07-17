@extends('layout.master')

@section('title', 'All Roles')

@section('content')
    <div class="container">

        <div class="row col-md-8 col-md-offset-2">

            <table class="table table-striped">

                <thead>
                <th>ID</th>
                <th>Name</th>
                </thead>

                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>
@endsection