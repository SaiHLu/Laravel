@extends('layout.master')

@section('title', 'All Categories')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="well">

                <legend>All Categories</legend>
                <table class="table table-bordered">
                    <thead>
                    <th>ID</th>
                    <th>Category's Name</th>
                    <th>Generate</th>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td><a href="{{action('admin\CategoryController@edit', $category->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection