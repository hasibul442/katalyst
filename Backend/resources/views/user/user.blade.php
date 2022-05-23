@extends('Layout.master')
@section('title', 'Users')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">User</li>
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

            <table class="table display">
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
                    @foreach ($users as $item )
                        <tr>
                            <td>1</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->user_type }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-primary">Delete</button>
                                <button class="btn btn-primary">Update PassWord</button>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
