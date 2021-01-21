@extends('layouts.container')

@section('content')

{{-- <div class="container"> --}}
    <div class="row">
        <div class="col-md-5">
            <form method="POST" action="{{route('students.store')}}">
                @csrf 
                <br><br>
                <h1>Student Registration </h1><br><br>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="Tanvir Ahmed">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="Email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="tanvirictbd@example.com">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Phone No </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="01623752988">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address"  placeholder="address" value="Tangail">
                    </div>
                </div><br>
                <!-- <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div><br> -->
                <button type="submit" class="btn btn-primary">Submit</button>
                <br><br>
            </form>
        </div>


        <div class="col-md-7">
            <br><br>
            <div class="card">
                <div class="card-header">
                    Student informations
                </div>
                <div class="card-body">
                    <table class="table table-hover table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone NO</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <a class="btn btn-success" href="#">Edit</a>
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                                {{-- <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                </tr> --}}
                            </tbody>
                    </table>
                </div>
            </div>
















    </div>
{{-- </div> --}}







@endSection







