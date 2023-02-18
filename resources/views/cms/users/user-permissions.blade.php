@extends('layouts.mainLayout')

<link rel="stylesheet" href="{{asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

@section('content')
    <div class="card-header">
        <h3 class="card-title">User ({{$user->full_name}}) - Permissions</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 20%">Name</th>
                    <th>Type</th>
                    <th style="width: 20%">Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr id="role_{{$permission->id}}_row">
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$permission->name}}</td>
                    <td>
                        <span
                            class="badge bg-success">{{$permission->guard_name}}</span>
                    </td>
                    <td>
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                                <input onclick="performUpdate('{{$permission->id}}')" type="checkbox" id="permission_{{$permission->id}}_check_box" @checked($permission->assigned)>
                                <label for="permission_{{$permission->id}}_check_box">
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
@endsection

<script>
    function performUpdate(permissionId) {
        axios.put('/cms/admin/users/{{$user->id}}/permissions',{
            permission_id: permissionId,
        })
        .then(function (response) {
            // handle success
            console.log(response);
            // toastr.success(response.data.message);
            toastr.success(response.data.message);
        })
        .catch(function (error) {
            // handle error 4xx - 5xx
            console.log(error);
            // toastr.error(error.response.data.message);
            toastr.error(error.response.data.message);
        })
        .then(function () {
            // always executed
        });
    }
</script>