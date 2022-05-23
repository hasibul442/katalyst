
@extends('Layout.master')
@section('title', 'Job Post Update')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Job Post</a></li>
                    <li class="breadcrumb-item active">Update Post</li>
                </ol>
            </div>
            <h4 class="page-title">Update Post Information</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Update Information</h1>

            <form class="forms-sample" id="JobForm" method="POST" action="{{ url('/job/post/update/'.$jobposts->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <ul class="alert alert-warning d-none" id="save_errorList"></ul> --}}

                <div class="form-group row">
                    <label for="position_name" class="col-sm-3 col-form-label">Position Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="position_name" value="{{ $jobposts->position_name }}" name="position_name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="vacancy" class="col-sm-3 col-form-label">Vacancy</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="vacancy" value="{{ $jobposts->vacancy }}" name="vacancy">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="salary" class="col-sm-3 col-form-label">Salary</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="salary" value="{{ $jobposts->salary }}"  name="salary">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exprience" class="col-sm-3 col-form-label">Exprience</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exprience" value="{{ $jobposts->exprience }}" placeholder="2 years" name="exprience">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="application_dead_line" class="col-sm-3 col-form-label">Dead Line</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="application_dead_line" value="{{ $jobposts->application_dead_line }}" name="application_dead_line">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Desctiption</label>
                    <div class="col-sm-9">
                        <textarea name="description" required class="form-control summernote-editor" id="description">{{ $jobposts->description }}</textarea>
                    </div>
                </div>

                <div class="text-center pb-2">
                    <a type="button" class="btn btn-secondary" href= {{ route('jobportal') }} >Back</a>
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
