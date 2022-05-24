@extends('Layout.master')
@section('title', 'Basic Chemicals Info Update')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Basic Chemical</a></li>
                    <li class="breadcrumb-item active">Update Basic Chemical</li>
                </ol>
            </div>
            <h4 class="page-title">Update Basic Chemical Information</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Update Basic Chemical Information</h1>

            <form class="forms-sample" id="basicChemicalForm" method="POST" action="{{ url('/basicchemicals/update/'.$basicChemicals->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                <div class="form-group row">
                    <label for="chemical_name" class="col-sm-3 col-form-label">Chemical Name <small class="text-danger">*</small></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="chemical_name" value="{{ $basicChemicals->chemical_name }}" name="chemical_name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-sm-3 col-form-label">Chemical Image <small class="text-danger">*</small></label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="short_description" class="col-sm-3 col-form-label">Short Description <small class="text-danger">*</small></label>
                    <div class="col-sm-9">
                        <textarea name="short_description" class="form-control " id="short_description">{{ $basicChemicals->short_description }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Desctiption <small class="text-danger">*</small></label>
                    <div class="col-sm-9">
                        <textarea name="description" class="form-control summernote-editor" id="description">{{ $basicChemicals->description }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Application <small class="text-danger">*</small></label>
                    <div class="col-sm-9">
                        <textarea name="application" required class="form-control " id="application">{{ $basicChemicals->application }}</textarea>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
