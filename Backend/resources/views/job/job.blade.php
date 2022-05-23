@extends('Layout.master')
@section('title', 'Job Portal')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Job Portal</li>
                </ol>
            </div>
            <h4 class="page-title">Job Portal</h4>
        </div>
    </div>
</div>


<section>
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">All Job</h4>
            <div class="text-center"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#JobAdd">New Job</button></div>

            <div class="pt-5">
                <table class="table display" width="100%" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Position Name</th>
                            <th>Vacancy</th>
                            <th>Salary</th>
                            <th>Exprience</th>
                            <th>Dead Line</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($jobposts as $item )

                        <tr id="auxiliary-{{ $item->id }}">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->position_name }}</td>
                            <td>{{ $item->vacancy }}</td>
                            <td>{{ $item->salary }}</td>
                            <td>{{ $item->exprience }}</td>
                            <td>{{ $item->application_dead_line }}</td>
                            <td>{!! $item->description !!}</td>
                            <td><input type="checkbox" name="status" class="status" id="status" data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-id="{{ $item->id }}" {{ $item->status == 'Active' ? 'checked' : '' }}></td>
                            <td>
                                <a class="btn btn-outline-warning btn-sm" href="{{ route('jobpost.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-outline-info btn-sm" href="{{ route('applicant_list', $item->id) }}"><i class="fas fa-eye"></i></a>
                                <a href="javascript:void(0);" data-id="{{ $item->id }}" role="button" class="btn btn-sm btn-outline-danger deletebtn"><i class="mdi mdi-trash-can"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--Add Modal -->
<div class="modal fade" id="JobAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="JobForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <div class="form-group row">
                        <label for="position_name" class="col-sm-3 col-form-label">Position Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="position_name" placeholder="Position Name" name="position_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="vacancy" class="col-sm-3 col-form-label">Vacancy</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vacancy" placeholder="0" name="vacancy">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="salary" class="col-sm-3 col-form-label">Salary</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="salary" placeholder="20000.00" name="salary">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exprience" class="col-sm-3 col-form-label">Exprience</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exprience" placeholder="2 years" name="exprience">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="application_dead_line" class="col-sm-3 col-form-label">Dead Line</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="application_dead_line"  name="application_dead_line">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Desctiption</label>
                        <div class="col-sm-9">
                            <textarea name="description" required class="form-control summernote-editor" id="description"></textarea>
                        </div>
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

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: false
        , });
    });

</script>

<script>
    $('#JobForm').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#JobForm')[0]);
        $.ajax({
            type: "post"
            , url: "/job/add"
            , data: myformData
            , cache: false
            , processData: false
            , contentType: false
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                $("#JobForm").find('input').val('');
                $('#JobAdd').modal('hide');
                location.reload();
            }
            , error: function(error) {
                console.log(error);
                alert("Data Not Save");
            }
        });
    });

    $('body').on('click', '.deletebtn', function() {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        if (confirm("Are You sure want to delete !")) {
            $.ajax({
                type: "DELETE"
                , url: "/job/" + id
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

<script>
    $(document).on('change', '#status', function() {
        var id = $(this).attr('data-id');
        if (this.checked) {
            var catstatus = "Active";
        } else {
            var catstatus = "Deactive";
        }
        $.ajax({
            dataType: "json"
            , url: '/job/status/' + id + '/' + catstatus
            , method: 'get'
            , success: function(result1) {
                console.log(result1);
            }
        });
    })

</script>
@endsection
