@extends('layouts.Admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>DEPARTMENT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.departments.create') }}"> Create New Department</a>
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
            <th>Department_Name</th>
            <th>Location</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($departments as $department)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $department->department_name }}</td>
            <td>{{ $department->location }}</td>
            <td>{{ $department->description }}</td>
           <td>
                <a href="{{ route('admin.departments.show', $department->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('admin.departments.edit', $department->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('admin.departments.delete', $department->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $departments->links() !!}

@endsection
