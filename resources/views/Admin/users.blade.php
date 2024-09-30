@extends('Admin.sidebar')
@section('sidebar')
<head>
    <title>Admin Users - MVC - Online Laundry Service</title>
</head>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h5 class="card-text">List of Users</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped table-bordered" id="datatable">
                        <thead class="table-warning">
                            <th>Complete Name</th>
                            <th>Sex</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Email</th>
                        </thead>
                        <tbody id="user_table_body">

                        </tbody>
                    </table>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <script>
        fetch_users();
        function fetch_users(){
            $.ajax({
                type: "GET",
                url: `{{ url('/get-user') }}`,
                success: function (data) {
                    let rows = '';

                    $.each(data, function(index, users){
                        rows += `
                            <tr>
                                <td>${users.complete_name}</td>
                                <td>${users.sex}</td>
                                <td>${users.phone}</td>
                                <td>${users.status}</td>
                                <td>${users.email}</td>
                            </tr>


                        `;
                    });

                    $('#user_table_body').html(rows);


                }
            });
        }
    </script>

@endsection
