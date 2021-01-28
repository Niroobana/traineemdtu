@extends('layouts.Admin.master')
@section('content')

<div class="row">
    <div class="col-12">
       <div class="float-left">
    <h4 class="card-title">Show user- {{ $user->title }}</h4>
        </div>
    </div>
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Username : </b></td>
                            <td>{{ $user->username}}</td>
                        </tr>
                        <tr>
                            <td><b>Name: </b></td>
                            <td>{{ $user->name}}</td>
                        </tr>
                            <td><b>Email : </b></td>
                                <td> {!! $user->email !!}</td>
                            </tr>
                            <tr>
                                <td><b>Password : </b></td>
                                <td> {!! $user->password !!}</td>
                            </tr>
                            <tr>
                                <td><b>Phone : </b></td>
                                <td> {!! $user->phone !!}</td>
                            </tr>
                            <tr>
                                <td><b>Address : </b></td>
                                <td> {!! $user->address !!}</td>
                            </tr>
                            <tr>
                                <td><b>Gender : </b></td>
                                <td> {!! $user->gender !!}</td>
                            </tr>
                            <tr>
                                <td><b>City : </b></td>
                                <td> {!! $user->city !!}</td>
                            </tr>
                            <tr>

                                </tr>
                    </tbody>
                </table>
</div>



@endsection

