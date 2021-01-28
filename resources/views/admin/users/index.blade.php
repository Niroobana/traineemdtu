@extends('layouts.Admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>USERS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create New Users</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

    <div class="col-lg-50 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Gender</th>
            <th>City</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->Username }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->city }}</td>
            
            <td>
                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('admin.users.delete', $user->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $users->links() !!}

@endsection
