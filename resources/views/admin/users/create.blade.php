@extends('layouts.Admin.master')
@section('title', 'Course List')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create users</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->route('admin.users.store')->method('post') !!}
                @include('admin.users._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection