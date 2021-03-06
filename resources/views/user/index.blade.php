@extends('layouts.master')

@section('title') Users @stop

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> User Administration </h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="/admin/user/edit/{{ $user->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        <a href="/admin/user/destroy/{{$user->id}}"><button class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
        <a href="/admin/user/create" class="btn btn-success">Add User</a>
</div>
@stop