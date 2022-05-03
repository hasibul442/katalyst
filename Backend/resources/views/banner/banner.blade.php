@extends('Layout.master')
@section('title', 'Banner')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Katalyst</a></li>
                    <li class="breadcrumb-item active">Banner Image</li>
                </ol>
            </div>
            <h4 class="page-title">Banner</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Banners</h4>
            <div class="text-center"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#BannerAdd">Banner Add</button></div>

            <div class="pt-5">
                <table class="table display" width="100%" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($banner as $item )

                        <tr id="banner-{{ $item->id }}">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->title }}</td>
                            <td><img src="{{ asset('/assets/image/banner/'.$item->image) }}" alt="" style="width: 100px; height:100px"></td>
                            <td><input type="checkbox" name="status" class="status" id="status" data-toggle="toggle" data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-id="{{ $item->id }}" {{ $item->status == 'Active' ? 'checked' : '' }}></td>
                            <td>
                                {{-- <a class="btn btn-outline-warning btn-sm" href="javascript:void(0);" onclick="editbanner({{ $item->id }})"><i class="fas fa-pencil-alt"></i></a> --}}
                                {{-- <button class="btn btn-outline-warning btn-sm edit-btn" value="{{ $item->id }}"><i class="fas fa-pencil-alt"></i></button> --}}
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
<div class="modal fade" id="BannerAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="bannerForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Banner Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" placeholder="Banner Title" name="title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="image" required>
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


{{-- Data add Model Start --}}
<div class="modal fade" id="BannerEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center">
                    <h3 class="modal-title" id="exampleModalLabel">Insert Position & Salary</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul id="BannerForm_errorlist"></ul>
                <form class="forms-sample" id="bannereditform" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label>Title<small class="text-danger">*</small></label>
                        <input type="text" id="title1" name="title1" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Banner Image<small class="text-danger">*</small></label>
                        <input type="file" id="image1" name="imagee" class="form-control" />
                    </div>


                    <div class="text-center pb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success submit" name="submit" id="submit" value="Update" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Data Add Modal End --}}
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: true
        , });
    });

</script>
<script>
    $('#bannerForm').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#bannerForm')[0]);
        $.ajax({
            type: "post"
            , url: "/banner/add"
            , data: myformData
            , cache: false
            , processData: false
            , contentType: false
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                $("#bannerForm").find('input').val('');
                $('#BannerAdd').modal('hide');
                location.reload();
            }
            , error: function(error) {
                console.log(error);
                alert("Data Not Save");
            }
        });
    });

    function editbanner(id) {
        $.get("/banner/edit/" + id, function(banner) {
            $('#id').val(banner.id);
            $('#title1').val(banner.title);
            $('#BannerEditModal').modal("toggle");
        });
    }

    $('#bannereditform').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let id = $('#id').val();
        var title1 = $('#title1').val();
        var image1 = $('#image1').val();
        let _token = $('input[name=_token]').val();
        let formData = new FormData($('#bannereditform')[0]);
        console.log(image1);

        $.ajax({
            type: "POST"
            , url: "/banner/update/"+id
            , data: formData
            , dataType: "json"
            // , processData: false

            , success: function(response) {
                // console.log(response);
                $('#banner' + response.id + 'td:nth-child(1)').text(response.title1);
                $('#banner' + response.id + 'td:nth-child(2)').prop(response.image1);

                $('#BannerEditModal').modal("toggle");
                location.reload();
                // $('#bannereditform')[0].reset();

            }
        });

    });



    $('body').on('click', '.deletebtn', function() {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        if (confirm("Are You sure want to delete !")) {
            $.ajax({
                type: "DELETE"
                , url: "/banner/" + id
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
            , url: '/banner/status/' + id + '/' + catstatus
            , method: 'get'
            , success: function(result1) {
                console.log(result1);
            }
        });
    })

</script>
@endsection
