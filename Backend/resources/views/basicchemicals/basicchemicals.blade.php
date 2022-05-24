@extends('Layout.master')
@section('title', 'Basic Chemicals')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                    <li class="breadcrumb-item active">Basic Chemicals</li>
                </ol>
            </div>
            <h4 class="page-title">Product</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Basic Chemicals</h4>
            <div class="text-center"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#BasicChemicalAdd">Basic Chemicals Add</button></div>

            <div class="pt-5">
                <table class="table display" width="100%" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Chemical Name</th>
                            <th>Chemical Image</th>
                            <th>Short Description</th>
                            <th>Description</th>
                            <th>Application</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($basicChemicals as $item )

                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->chemical_name }}</td>
                            <td><img src="{{ asset('/assets/image/basicchemicals/'.$item->chemical_image) }}" alt="" style="width: 100px; height:100px"></td>
                            <td>{!! $item->short_description !!}</td>
                            <td>{!! $item->description !!}</td>
                            <td>{!! $item->application !!}</td>
                            <td><input type="checkbox" name="status" class="status" id="status" data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-id="{{ $item->id }}" {{ $item->status == 'Active' ? 'checked' : '' }}></td>
                            <td>
                                <a class="btn btn-outline-warning btn-sm" href="{{ route('basicchemicals.edit', $item->id) }}"><i class="fas fa-pencil-alt"></i></a>
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
<div class="modal fade" id="BasicChemicalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="basicChemicalForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <div class="form-group row">
                        <label for="chemical_name" class="col-sm-3 col-form-label">Chemical Name <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="chemical_name" placeholder="Chemical Name" name="chemical_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Chemical Image <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_description" class="col-sm-3 col-form-label">Short Description <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <textarea name="short_description" required class="form-control " id="short_description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Desctiption <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <textarea name="description" required class="form-control summernote-editor" id="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Application <small class="text-danger">*</small></label>
                        <div class="col-sm-9">
                            <textarea name="application" required class="form-control " id="application"></textarea>
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
            responsive: true
        , });
    });

</script>

<script>
    $('#basicChemicalForm').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#basicChemicalForm')[0]);
        $.ajax({
            type: "post"
            , url: "/basicchemical/add"
            , data: myformData
            , cache: false
            , processData: false
            , contentType: false
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                $("#basicChemicalForm").find('input').val('');
                $('#BasicChemicalAdd').modal('hide');
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
                , url: "/basicchemicals/" + id
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
            , url: '/basicchemicals/status/' + id + '/' + catstatus
            , method: 'get'
            , success: function(result1) {
                console.log(result1);
            }
        });
    })

</script>
@endsection
