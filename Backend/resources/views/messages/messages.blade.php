@extends('Layout.master')
@section('title', 'Messages')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Messages</li>
                </ol>
            </div>
            <h4 class="page-title">Messages</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">All Messages</h4>
            {{-- <div class="text-center"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#DyestuffsAdd">Dyestuffs Add</button></div> --}}

            <div class="pt-5">
                <table class="table display" width="100%" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Name Of Organization</th>
                            <th>Position</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($message as $item )

                        <tr id="message-{{ $item->id }}">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->f_name }} {{ $item->l_name }}</td>
                            <td>{{ $item->name_of_organization }}</td>
                            <td>{{ $item->position }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                {{-- <a class="btn btn-outline-warning btn-sm" href="javascript:void(0);" onclick="editbanner({{ $item->id }})"><i class="fas fa-pencil-alt"></i></a> --}}
                                {{-- <button class="btn btn-outline-warning btn-sm edit-btn" value="{{ $item->id }}"><i class="fas fa-pencil-alt"></i></button> --}}
                                {{-- <a href="javascript:void(0);" data-id="{{ $item->id }}" role="button" class="btn btn-sm btn-outline-danger deletebtn"><i class="mdi mdi-trash-can"></i></a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
