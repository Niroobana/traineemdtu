@extends('layouts.Admin.master')
@section('title', 'Employee List')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create Employees</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->route('admin.employees.store')->method('post') !!}
                @include('admin.employees._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
