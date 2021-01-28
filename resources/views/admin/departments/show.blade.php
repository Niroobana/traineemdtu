@extends('layouts.Admin.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="float-left">
    <h4 class="card-title"> Show resource-  {{ $department->title }}</h4>
         </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                    <tr>
                    <td><b>Department_Name : </b></td>
                    <td> {!! $department->department !!}</td>
                    </tr>

                    <tr>
                        <td><b>Location : </b></td>
                        <td> {!! $department->department !!}</td>
                    </tr>

                    <tr>
                    <td><b>Description : </b></td>
                    <td>{{ $department->department }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
</div>

@endsection
