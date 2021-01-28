@extends('layouts.Admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>EXPENSES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.expenses.create') }}"> Create New Expenses</a>
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
            <th>Program Id</th>
            <th>Program Name</th>
            <th>Stationary</th>
            <th>Accommodation</th>
            <th>Refreshment</th>
            <th>Total Amount</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($expenses as $expense)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $expense->program_id }}</td>
            <td>{{ $expense->program_name}}</td>
            <td>{{ $expense->stationary }}</td>
            <td>{{ $expense->accommodation }}</td>
            <td>{{ $expense->refreshment }}</td>
            <td>{{ $expense->total_amount }}</td>
            <td>
                <a href="{{ route('user.expenses.show', $expense->id) }}" class="btn btn-info btn-xs">Show</a>
                <a href="{{ route('user.expenses.edit', $expense->id) }}" class="btn btn-primary btn-xs">Edit</a>
                <a href="{{ route('user.expenses.delete', $expense->id) }}" class="btn btn-danger btn-xs">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
          </div>
        </div>
    </div>
    {!! $expenses->links() !!}

@endsection
