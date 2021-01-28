@extends('layouts.Admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>EMPLOYEES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.employees.create') }}"> Create New Employees</a>
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
            <th>Employee_Role</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Gender</th>
            <th>NIC</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Address</th>
            <th>Department</th>
            <th>Mobile_No</th>
            <th>Grade</th>
            <th>Experience</th>
             <th width="280px">Action</th>


        </tr>
    </thead>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->employee_role }}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->nic }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->designation }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->mobile_No }}</td>
            <td>{{ $employee->grade }}</td>
            <td>{{ $employee->experience }}</td>
            <td>
                <a href="{{ route('admin.employees.show', $employee->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('admin.employees.delete', $employee->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $employees->links() !!}

@endsection
