@extends('Layout.master')
@section('title', 'Company Profile')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Katalyst</a></li>
                    <li class="breadcrumb-item active">Company Profile</li>
                </ol>
            </div>
            <h4 class="page-title">Company Profile</h4>
        </div>
    </div>
</div>

<section>
    <div class="card">
        <div class="card-body">
            <div class="text-center"><img src="{{ asset('assets/images/Logo/Logo-K.png') }}" alt="" height="60"></div>
            <h4 class="text-center">Katalyst Bangladesh
            </h4>
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <form method="post" action="{{ url('/profile/update/'.$profile->id) }}" id="profile_info" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="phone">Phone No<span class="text-danger">*</span></label>
                    <input type="phone" name="phoneno" required placeholder="Enter Phone Number" class="form-control" id="phone" value="{{ $profile->phoneno }}">
                </div>

                <div class="form-group">
                    <label for="mobile1">Mobile Number 1<span class="text-danger">*</span></label>
                    <input type="phone" name="mobileno1" required placeholder="Enter Mobile Number" class="form-control" id="mobile1" value="{{ $profile->mobileno1 }}">
                </div>

                <div class="form-group">
                    <label for="mobile2">Mobile Number 2</label>
                    <input type="phone" name="mobileno2" placeholder="Enter Mobile Number" class="form-control" id="mobile2" value="{{ $profile->mobileno2 }}">
                </div>

                <div class="form-group">
                    <label for="email">Mobile Number 1<span class="text-danger">*</span></label>
                    <input type="email" name="email" required placeholder="Enter Email" class="form-control" id="email" value="{{ $profile->email }}">
                </div>

                <div class="form-group">
                    <label for="address">Address<span class="text-danger">*</span></label>
                    <input type="text" name="address" required placeholder="Enter Address" class="form-control" id="address" value="{{ $profile->address }}">
                </div>

                <div class="form-group">
                    <label for="addresslink">Google Address Link<span class="text-danger">*</span></label>
                    <input type="url" name="address_link" required placeholder="Enter Address Link" class="form-control" id="address_link"  value="{{ $profile->address_link }}">
                </div>

                <div class="form-group">
                    <label for="history">History<span class="text-danger">*</span></label>
                    <textarea name="history" required class="form-control summernote-editor" id="history">{{ $profile->history }}</textarea>
                </div>

                <div class="form-group">
                    <label for="mission">Mission<span class="text-danger">*</span></label>
                    <textarea name="mission" required class="form-control summernote-editor" id="mission">{{ $profile->mission }}</textarea>
                </div>

                <div class="form-group">
                    <label for="vision">Vision<span class="text-danger">*</span></label>
                    <textarea name="vision" required class="form-control summernote-editor" id="vision">{{ $profile->vision }}</textarea>
                </div>

                <div class="form-group">
                    <label for="value">Value<span class="text-danger">*</span></label>
                    <textarea name="value" required class="form-control summernote-editor" id="value">{{ $profile->value }}</textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" onclick="window.history.back()" class="btn btn-pink waves-effect waves-light">Back</button>
                    <button type="submit" class=" btn btn-info waves-effect waves-light">Update</button>
                </div>
            </form>

        </div>
    </div>
</section>




@endsection
