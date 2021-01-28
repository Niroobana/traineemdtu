@extends('layouts.Admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>COURSES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.courses.create') }}"> Create New Courses</a>
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
            <th>Course_name</th>
            <th>Categary</th>
            <th>Duration</th>
            <th>Course_type</th>
            <th>Target_group</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($courses as $course)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->categary }}</td>
            <td>{{ $course->duration }}</td>
            <td>{{ $course->course_type }}</td>
            <td>{{ $course->target_group }}</td>
            <td>{{ $course->description }}</td>
            <td>
                <a href="{{ route('admin.courses.show', $course->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('admin.courses.delete', $course->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $courses->links() !!}

@endsection
