@extends('Layout.master')
@section('title', 'Users')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
            <h4 class="page-title">Users</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">User List</h3>
            <div class="text-center"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#userAdd">Create New User</button></div>
            <table class="table display mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=0;
                    @endphp
                    @foreach ($users as $item )
                    <tr id="users{{ $item->id }}">
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->user_type }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a class="btn btn-outline-warning btn-sm" href="javascript:void(0);" onclick="editUsers({{ $item->id }})"><i class="fas fa-pencil-alt"></i></a>
                            <a class="btn btn-outline-info btn-sm" href="javascript:void(0);" onclick="editPassword({{ $item->id }})"><i class="fad fa-lock"></i></a>
                            @if( Auth::user()->user_type == $item->user_type && Auth::user()->email == $item->email)
                            <a href="javascript:void(0);" data-id="{{ $item->id }}" role="button" class="disabled btn btn-sm btn-outline-dark deletebtn"><i class="mdi mdi-trash-can"></i></a>
                            @else
                            <a href="javascript:void(0);" data-id="{{ $item->id }}" role="button" class="btn btn-sm btn-outline-danger deletebtn"><i class="mdi mdi-trash-can"></i></a>
                            @endif

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>


<!--Add Modal -->
<div class="modal fade" id="userAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="userAddForm" method="POST" enctype="multipart/form-data">

                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Full Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" placeholder="Enter your name" required name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email" autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password <small>password content 8 letter</small></label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required id="password" autocomplete="new-password" placeholder="Enter your password" minlength="8">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3" style="display: none">
                        <input class="form-control" type="text" name="user_type" value="Admin">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password-confirm">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" required id="password-confirm" autocomplete="new-password" placeholder="Enter your password Again" minlength="8">
                    </div>



                    <div class="text-center pb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Edit Information -->
<div class="modal fade" id="userEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="userEditForm"  enctype="multipart/form-data">

                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    @csrf
                    <div style=" display:none">
                        <input type="text" name="id" id="id">
                    </div>

                    <div class="form-group mb-3">
                        <label for="name1">Full Name</label>
                        <input class="form-control" type="text" id="name1" name="name1">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email1">Email address</label>
                        <input class="form-control" type="email" id="email1" name="email1">
                    </div>

                    <div class="form-group mb-3">
                        <label for="user_type1">Admin Roll</label>
                        <select class="form-control" name="user_type1" id="user_type1">
                            <option value="Admin">Admin</option>
                            <option value="Super_Admin">Super Admin</option>
                        </select>
                        {{-- <input class="form-control" type="text" name="user_type" value="Admin"> --}}
                    </div>

                    <div class="text-center pb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="submit1" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Edit Password -->
<div class="modal fade" id="userPasswordUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="userPasswordUpdateForm"  enctype="multipart/form-data">

                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    @csrf
                    <div style=" display:none">
                        <input type="text" name="id" id="id1">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password1">Password <small>password content 8 letter</small></label>
                        <input class="form-control" type="password" name="password1" required id="password1" autocomplete="new-password" placeholder="Enter your password" minlength="8">
                    </div>


                    <div class="text-center pb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="submit1" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#userAddForm').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#userAddForm')[0]);
        $.ajax({
            type: "post"
            , url: "/users/add"
            , data: myformData
            , cache: false
            , processData: false
            , contentType: false
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                $("#userAddForm").find('input').val('');
                $('#userAdd').modal('hide');
                location.reload();
            }
            , error: function(error) {
                console.log(error);
                alert("Data Not Save");
            }
        });
    });



    function editUsers(id){
        $.get("/users/edit/"+id, function(users){
            $('#id').val(users.id);
            $('#name1').val(users.name);
            $('#email1').val(users.email);
            $('#user_type1').val(users.user_type);
            // $('#balance').val(bank.balance);
            $('#userEditModal').modal("toggle");
        });
    }

    $('#userEditForm').submit(function (e) {
        e.preventDefault();

        let id = $('#id').val();
        let name1 = $('#name1').val();
        let email1 = $('#email1').val();
        let user_type1 = $('#user_type1').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            type: "PUT",
            url: "/users/update",
            data: {
                id:id,
                name1:name1,
                email1:email1,
                user_type1:user_type1,
                _token:_token,
            },
            dataType: "json",
            success: function (response) {
                // console.log(response);
                $('#users'+response.id + 'td:nth-child(1)').text(response.name1);
                $('#users'+response.id + 'td:nth-child(2)').text(response.email1);
                $('#users'+response.id + 'td:nth-child(3)').text(response.user_type1);
                $('#userEditModal').modal("toggle");
                location.reload();
                $('#userEditForm')[0].reset();

            }
        });

    });

    function editPassword(id){
        $.get("/users/edit/"+id, function(userspass){
            $('#id1').val(userspass.id);
            $('#password1').val(userspass.password);
            $('#userPasswordUpdateModal').modal("toggle");
        });
    }
    $('#userPasswordUpdateForm').submit(function (e) {
        e.preventDefault();

        let id1 = $('#id1').val();
        let password1 = $('#password1').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            type: "PUT",
            url: "/users/password/update",
            data: {
                id:id1,
                password1:password1,
                _token:_token,
            },
            dataType: "json",
            success: function (response) {
                // console.log(response);
                $('#users'+response.id + 'td:nth-child(1)').text(response.password1);
                $('#userPasswordUpdatetModal').modal("toggle");
                location.reload();
                $('#userPasswordUpdateForm')[0].reset();

            }
        });

    });

    $('body').on('click', '.deletebtn', function() {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        if (confirm("Are You sure want to delete !")) {
            $.ajax({
                type: "DELETE"
                , url: "/users/" + id
                , data: {
                    "id": id
                    , "_token": token
                , }
                , success: function(data) {

                    location.reload();
                    console.log(data);
                }
                , error: function(data) {
                    console.log('Error:', data);
                }
            });
        }
    });

</script>

@endsection
