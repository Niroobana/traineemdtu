@extends('layouts.Admin.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Delete - {{ $training_program->title }}</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>('admin.training_programs.destory', $training_program], 'method'=>'delete']) !!}
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-danger mb-2 mt-2">
                            <div class="card-header">
                                <h5 class="card-title">Delete - {{ $training_program->title }}</h5>
                            </div>
                            <div class="card-body">
                                Are you sure to delete? "{{ $training_program->title }}"?
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.training_programs.index') }}" class="btn btn-dark btn-xs">Cancel</a>
                        <button class="btn btn-danger btn-xs float-right"> Delete </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
