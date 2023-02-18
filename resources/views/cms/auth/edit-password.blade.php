@extends('cms.parent')

@section('page-title','Dashboard')

@section('lg-title','Larage')
@section('main-title','Main')
@section('sm-title','Small')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Admin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form id="page-form">
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" class="form-control" id="new_password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <label for="new_password_confirmation">New Password Confirmation</label>
                                <input type="password" class="form-control" id="new_password_confirmation" placeholder="New Password Confirmation">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" onclick="performSave()" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('scripts')

<script>
    function performSave() {
        // Make a request for a user with a given ID
        axios.put('/cms/admin/edit-password',{
            current_password: document.getElementById('current_password').value,
            new_password: document.getElementById('new_password').value,
            new_password_confirmation: document.getElementById('new_password_confirmation').value,
        })
        .then(function (response) {
            // handle success
            console.log(response);
            toastr.success(response.data.message);
            document.getElementById('page-form').reset();
        })
        .catch(function (error) {
            // handle error 4xx - 5xx
            console.log(error);
            toastr.error(error.response.data.message);
        })
        .then(function () {
            // always executed
        });
    }
</script>
@endsection