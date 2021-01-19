@extends('layouts.container')

@section('content')



    <div class="container">
        <form method="POST" action="{{route('students.store')}}">
            @csrf 
            <h1>Student Registration </h1><br><br>

            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="name" value="Tanvir Ahmed">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" placeholder="address" value="Tangail">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Phone No </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="phone" value="01623752988">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="email"
                        value="tanvirictbd@example.com">
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
@endSection







