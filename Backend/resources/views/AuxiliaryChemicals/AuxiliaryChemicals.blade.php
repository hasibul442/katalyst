@extends('Layout.master')
@section('title', 'Auxiliary Chemicals ')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Chemicals</a></li>
                    <li class="breadcrumb-item active">Auxiliary Chemicals Image</li>
                </ol>
            </div>
            <h4 class="page-title">Chemicals</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">Auxiliary Chemicals</h4>
            <div class="text-center"><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#AuxiliaryChemicalsAdd">Auxiliary Chemicals Add</button></div>

            <div class="pt-5">
                <table class="table display" width="100%" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Chemical Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($auxiliaryChemicals as $item )

                        <tr id="auxiliary-{{ $item->id }}">
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->chemical_name }}</td>
                            <td><input type="checkbox" name="status" class="status" id="status"  data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger" data-id="{{ $item->id }}" {{ $item->status == 'Active' ? 'checked' : '' }}></td>
                            <td>
                                <a class="btn btn-outline-warning btn-sm" href="javascript:void(0);" onclick="editAuxiliaryChemicals({{ $item->id }})"><i class="fas fa-pencil-alt"></i></a>
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
<div class="modal fade" id="AuxiliaryChemicalsAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="AuxiliaryChemicalForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                    <table class="table table-borderless " id="table_field">
                        <thead>
                            <tr>
                                <th>Chemical Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="chemical_name" placeholder="Chemical Name" name="chemical_name[]">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm" style="background-color: #3a86ff;color:#FFF" id="add1"><i class="fas fa-plus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="text-center pb-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Edit Modal -->
<div class="modal fade" id="AuxiliaryChemicalsEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form class="forms-sample" id="AuxiliaryChemicalsEditForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}
                    <label for="chemical_name1">Chemical Name</label>
                    <input type="text" class="form-control" id="chemical_name1" name="chemical_name1">
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
    $('#AuxiliaryChemicalForm').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#AuxiliaryChemicalForm')[0]);
        $.ajax({
            type: "post"
            , url: "/auxiliarychemicals/add"
            , data: myformData
            , cache: false
            , processData: false
            , contentType: false
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                $("#AuxiliaryChemicalForm").find('input').val('');
                $('#AuxiliaryChemicalsAdd').modal('hide');
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
                , url: "/auxiliarychemicals/" + id
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


    function editAuxiliaryChemicals(id){
        $.get("/auxiliarychemicals/edit/"+id, function(auxi_chem){
            $('#id').val(auxi_chem.id);
            $('#chemical_name1').val(auxi_chem.chemical_name);
            $('#AuxiliaryChemicalsEdit').modal("toggle");
        });
    }
    $('#AuxiliaryChemicalsEditForm').submit(function (e) {
        e.preventDefault();

        let id = $('#id').val();
        let chemical_name1 = $('#chemical_name1').val();
        let _token = $('input[name=_token]').val();

        $.ajax({
            type: "PUT",
            url: "/auxiliarychemicals/update",
            data: {
                id:id,
                chemical_name1:chemical_name1,
                _token:_token,
            },
            dataType: "json",
            success: function (response) {
                // console.log(response);
                $('#auxiliary-'+response.id + 'td:nth-child(1)').text(response.chemical_name1);
                $('#AuxiliaryChemicalsEdit').modal("toggle");
                location.reload();
                $('#AuxiliaryChemicalsEditForm')[0].reset();

            }
        });

    });


</script>

<script>
    $(document).ready(function() {
        var html = '<tr>'+
                   '     <td>'+
                   '             <input type="text" class="form-control" id="chemical_name" placeholder="Chemical Name" name="chemical_name[]">'+
                   '     </td>'+
                   '     <td>'+
                   '         <button name="remove" class="btn btn-danger btn-sm" id="remove"><i class="fas fa-eraser"></i> </button>'+
                   '     </td>'+
                   ' </tr>';

        var x = 1;
        $("#add1").click(function() {
            $("#table_field").append(html);
        });
        $("#table_field").on('click', '#remove', function() {
            $(this).closest('tr').remove();
        });
    });

</script>

<script>
    $(document).on('change', '.status', function() {
        var id = $(this).attr('data-id');
        if (this.checked) {
            var catstatus = "Active";
        } else {
            var catstatus = "Deactive";
        }
        $.ajax({
            dataType: "json"
            , url: '/auxiliarychemicals/status/' + id + '/' + catstatus
            , method: 'get'
            , success: function(result1) {
                console.log(result1);
            }
        });
    })

</script>
@endsection
