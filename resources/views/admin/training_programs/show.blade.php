@extends('layouts.Admin.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="float-left">
    <h4 class="card-title"> Show training_Program-  {{ $training_program->title }}</h4>
         </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                    <tr>
                    <td><b>Program_name : </b></td>
                    <td> {{ $training_program->program_name }}</td>
                    </tr>

                    <tr>
                    <td><b>Date : </b></td>
                    <td>{{ $training_program->date }}</td>
                    </tr>
                     <tr>
                        <td><b>Location : </b></td>
                        <td> {{ $training_program->location }}</td>
                        </tr>

                        <tr>
                        <td><b>Program Type : </b></td>
                        <td>{{ $training_program->program_type }}</td>
                        </tr>

                        <tr>
                            <td><b>Duration : </b></td>
                            <td> {{ $training_program->duration }}</td>
                            </tr>

                            <tr>
                            <td><b>Content : </b></td>
                            <td>{{ $training_program->content }}</td>
                            </tr>
                            <tr>
                                <td><b>Target Group : </b></td>
                                <td> {{ $training_program->target_group }}</td>
                                </tr>

                                <tr>
                                <td><b>No Of Trainees : </b></td>
                                <td>{{ $training_program->no_of_trainees }}</td>
                                </tr>

                                 <tr>
                    <td><b>No Of Resources : </b></td>
                    <td> {{ $training_program->no_of_resources }}</td>
                    </tr>

                    <tr>
                    <td><b>No Of Staffs : </b></td>
                    <td>{{ $training_program->No_of_staffs }}</td>
                    </tr>
                </tbody>
        </table>
</div>
</div>

@endsection



