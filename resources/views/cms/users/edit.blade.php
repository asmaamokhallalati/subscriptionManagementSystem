@extends('layouts.mainLayout')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Edit User</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <form id="page-form">
        <div class="card-body">
            @csrf
            <div class="form-group">
                <label for="name">Full name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter full name"
                    value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email"
                    value="{{$user->email}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="button" onclick="performUpdate()" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection

<script>
    function performUpdate() {
        // Make a request for a user with a given ID
        axios.put('/cms/admin/users/{{$user->id}}',{
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
        })
        .then(function (response) {
            // handle success
            console.log(response);
            toastr.success(response.data.message);
            // document.getElementById('page-form').reset();
            window.location.href = '/cms/admin/users';
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
