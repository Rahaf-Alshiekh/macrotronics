@extends('layouts.master')
@section('content')
    <div class="container" id="login">
        <div class="row">
            <div class="col-md-12">
                <div class="main-tilte">
                    <h1>macrotronics </h1>
                    <i class="fa fa-hand-o-right"></i>
                    <a href="#">sign in</a>
                </div>

            </div>
        </div>
        <div class="row login-form" >
            <div class="col-md-6 ">
                <div class="form-section">
                    <h1>RETURNING CUSTOMER</h1>


                    <div class="mb-3">
                        <label for="" class="form-label">E-Mail Address:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                        <button>sign In</button>


                    </div>

                

                </div>

            </div>
            <div class="col-md-6 ">
                <div class="form-section">
                    <h1>YOUR ADDRESS </h1>


                    <div class="mb-3">
                        <label for="" class="form-label">Country: </label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">State/Province:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> City:</label>
                        <input type="email" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address (Max 60 characters):</label>
                        <input type="email" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> CBuilding:</label>
                        <input type="email" class="form-control" id="">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
