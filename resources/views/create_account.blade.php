<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Online Laundry Services</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("plugins/fontawesome-free/css/all.min.css") }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">


    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <h3 class="text-center mt-2">
                <b>Create Account</b>
            </h3>
            <div class="card-body">

                <form action="{{ url('/register') }}" method="post">
                    @csrf

                    <label>Complete Name</label>
                    <input type="text" name="complete_name" class="form-control" placeholder="Enter Complete Name">

                    <label>Sex</label>
                    <select class="form-select select2" name="sex" style="width:100%">
                        <option selected disabled>Please Select Sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address">

                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone">

                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">

                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username">

                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Enter Password">

                    <label>Confirm Password</label>
                    <input type="text" name="c_password" class="form-control" placeholder="Confirm Password">

                    <button class="btn btn-primary btn-block mt-2">
                        <i class="fas fa-plus"></i> Submit
                    </button>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ url("plugins/jquery/jquery.min.js") }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ url("plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <script>
        $(function(){
            $('.select2').select2();
        });
    </script>
</body>
</html>
@include('sweetalert::alert')
