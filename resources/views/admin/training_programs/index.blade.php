@extends('layouts.Admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>TRAINING-PROGRAMS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.training_programs.create') }}"> Create New Programs</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-50 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
            <tr>
            <th>id</th>
            <th>Program_name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Program_type</th>
            <th>Duration</th>
            <th>Content</th>
            <th>Target_group</th>
            <th>No_of_trainees</th>
            <th>No_of_resources</th>
            <th>No_of_staffs</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($training_programs as $training_program)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $training_program->program_name }}</td>
            <td>{{ $training_program->date }}</td>
            <td>{{ $training_program->location }}</td>
            <td>{{ $training_program->program_type }}</td>
            <td>{{ $training_program->duration }}</td>
            <td>{{ $training_program->content }}</td>
            <td>{{ $training_program->target_group }}</td>
            <td>{{ $training_program->no_of_trainees }}</td>
            <td>{{ $training_program->no_of_resources }}</td>
            <td>{{ $training_program->no_of_staffs }}</td>
            <td>
                <form action="{{ route('admin.training_programs.delete',$training_program->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.training_programs.show',$training_program->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.training_programs.edit',$training_program->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
</div>

    {!! $training_programs->links() !!}

@endsection
