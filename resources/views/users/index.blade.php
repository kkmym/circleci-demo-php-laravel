@extends('layouts.scaffold')

@section('main')

    <h1>Show Users</h1>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
@foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="/users/{{ $user->id }}/edit" class="btn btn-info">Edit</a></td>
        </tr>
@endforeach
        </tbody>
    </table>

@stop