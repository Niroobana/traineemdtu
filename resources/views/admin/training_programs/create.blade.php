@extends('layouts.Admin.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Create Training Program</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->route('admin.training_programs.store')->method('post') !!}
                @include('admin.training_programs._form')
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.training_programs.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-success btn-xs float-right"> Create </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection