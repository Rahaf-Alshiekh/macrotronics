@extends('layouts.master')
@section('content')

    <div class="container" id="sign-up">

        <div class="row">
            <div class="col-md-12">
                <div class="main-tilte">
                    <h1>macrotronics </h1>
                    <i class="fa fa-hand-o-right"></i>
                    <a href="#">Create an account</a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p><span class="red"> Note :</span>If you already have an account with us, please sign in at the <a href="/login"
                        class="red">sign in page.</a> </p>
            </div>
        </div>
        <div class="row sign-up-form">
            <div class="col-md-6 ">
                <div class="form-section">
                    <h1>YOUR PERSONAL DETAILS</h1>


                    <div class="mb-3">
                        <label for="" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> E-Mail Address:</label>
                        <input type="email" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Mobile:</label>
                        <input type="number" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Company Name:</label>
                        <input type="text" class="form-control" id="">
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
            <div class="col-md-6 mt-4 ">
                <div class="form-section">
                    <h1>YOUR PASSWORD </h1>


                    <div class="mb-3">
                        <label for="" class="form-label">password: </label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password Confirmation:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 ">
                <div class="form-section">
                    <h1>GOOGLE VERIFICATION </h1>


                    <div class="mb-3">
                        <label for="" class="form-label">password: </label>
                        <input type="text" class="form-control" id="">
                    </div>

                </div>
            </div>

        </div>


    </div> {{-- end container --}}



@endsection
