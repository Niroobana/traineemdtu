@extends('layouts.Admin.master')
@section('content')

<div class="row">
    <div class="col-12">
       <div class="float-left">
    <h4 class="card-title">Show course- {{ $expense->title }}</h4>
        </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Course_name : </b></td>
                            <td>{{ $expense->course_name}}</td>
                        </tr>
                        <tr>
                            <td><b>Categary: </b></td>
                            <td>{{ $expense->categary}}</td>
                        </tr>
                        <tr>
                                <td><b>Duration : </b></td>
                                <td> {!! $expense->duration !!}</td>
                            </tr>
                            <tr>

                                <td><b>Course_type : </b></td>
                                <td> {!! $expense->course_type !!}</td>
                            </tr>
                            <tr>
                                <td><b>Target_group : </b></td>
                                <td> {!! $expense->target_group !!}</td>
                            </tr>
                            <tr>
                                <td><b>Description : </b></td>
                                <td> {!! $expense->description !!}</td>
                            </tr>
                            <tr>
                                </tr>
                    </tbody>
                </table>
</div>



@endsection

