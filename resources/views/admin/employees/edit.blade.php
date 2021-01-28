@extends('layouts.Admin.master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit -    {{ $employee->title }}</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->fill($course)->route('admin.employees.update',[$course->id])->method('patch') !!}
                @include('admin.employees._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.employees.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Update </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
