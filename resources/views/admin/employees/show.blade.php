@extends('layouts.Admin.master')
@section('content')

<div class="row">
    <div class="col-12">
       <div class="float-left">
    <h4 class="card-title">Show employee- {{ $employee->title }}</h4>
        </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Employee_Role : </b></td>
                            <td>{{ $employee->employee_role}}</td>
                        </tr>
                        <tr>
                                <td><b>First_Name : </b></td>
                                <td> {{ $employee->first_name }}</td>
                            </tr>
                            <tr>

                                <td><b>Last_Name : </b></td>
                                <td> {{ $employee->last_name }}</td>
                            </tr>
                            <tr>
                                <td><b>Gender : </b></td>
                                <td> {{ $employee->gender }}</td>
                            </tr>
                            <tr>
                                <td><b>NIC : </b></td>
                                <td> {{ $employee->nic }}</td>
                            </tr>
                            <tr>
                                <td><b>Email : </b></td>
                                <td> {{ $employee->email }}</td>
                            </tr>
                            <tr>
                                <td><b>Designation : </b></td>
                                <td> {{ $employee->designation }}</td>
                            </tr>
                            <tr>
                                <td><b>Address : </b></td>
                                <td> {{ $employee->address }}</td>
                            </tr>
                            <tr>
                                <td><b>Department : </b></td>
                                <td> {{ $employee->department }}</td>
                            </tr>
                            <tr>
                                <td><b>Mobile_No : </b></td>
                                <td> {{ $employee->mobile_No }}</td>
                            </tr>
                            <tr>
                                <td><b>Grade : </b></td>
                                <td> {{ $employee->grade }}</td>
                            </tr>
                            <tr>
                                <td><b>Experience : </b></td>
                                <td> {{ $employee->experience }}</td>
                            </tr>
                            <tr>
                                </tr>
                    </tbody>
                </table>
</div>
@endsection

