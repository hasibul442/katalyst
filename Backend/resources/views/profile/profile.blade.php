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

            @if(App\Models\Profile::get()->count()=='0')
            <div class="text-center"><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#CompanyDetailsAdd">
                    Company Details
                </button></div>
            @else
            <div class="text-center" style="display:none"><button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#CompanyDetailsAdd">
                    Company Details
                </button></div>
            @endif

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if(App\Models\Profile::get()->count()!='0')
            <table class="display table">
                <tbody>
                    @foreach ($profile as $item)
                    <tr>
                        <th>Phone</th>
                        <td>{{ $item->phoneno }}</td>
                    </tr>
                    <tr>
                        <th>Mobile No 1</th>
                        <td>{{ $item->mobileno1 }}</td>
                    </tr>
                    <tr>
                        <th>Mobile No 2</th>
                        <td>{{ $item->mobileno2 }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><a href="{{ $item->address_link }}">{{ $item->address }}</a></td>
                    </tr>
                    <tr>
                        <th>History</th>
                        <td>{!! $item->history !!}</td>
                    </tr>
                    <tr>
                        <th>Mission</th>
                        <td>{!! $item->mission !!}</td>
                    </tr>
                    <tr>
                        <th>Vision</th>
                        <td>{!! $item->vision !!}</td>
                    </tr>
                    <tr>
                        <th>Value</th>
                        <td>{!! $item->value !!}</td>
                    </tr>
                    <tr>
                        <th>Update Info</th>
                        <td>
                            @if(App\Models\Profile::get()->count()!='0')
                            <div class="text-right"><a href="{{ route('profile.edit', $item->id) }}"  role="button" class="btn btn-sm btn-outline-pink mr-1 editbtn"><i class="mdi mdi-pencil-outline"></i>
                                </a></div>
                            @endif</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <table class="display table">
                <tbody>
                    <tr >
                        <td rowspan=2>No Data Found</td>
                    </tr>

                </tbody>
            </table>
            @endif

        </div>
    </div>
</section>



<!-- Company Add Model -->
<div class="modal fade" id="CompanyDetailsAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center">
                    <h5>Company Information</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="profile_info" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="phone">Phone No<span class="text-danger">*</span></label>
                        <input type="phone" name="phoneno" required placeholder="Enter Phone Number" class="form-control" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="mobile1">Mobile Number 1<span class="text-danger">*</span></label>
                        <input type="phone" name="mobileno1" required placeholder="Enter Mobile Number" class="form-control" id="mobile1">
                    </div>

                    <div class="form-group">
                        <label for="mobile2">Mobile Number 2</label>
                        <input type="phone" name="mobileno2" placeholder="Enter Mobile Number" class="form-control" id="mobile2">
                    </div>

                    <div class="form-group">
                        <label for="email">Mobile Number 1<span class="text-danger">*</span></label>
                        <input type="email" name="email" required placeholder="Enter Email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="address">Address<span class="text-danger">*</span></label>
                        <input type="text" name="address" required placeholder="Enter Address" class="form-control" id="address">
                    </div>

                    <div class="form-group">
                        <label for="addresslink">Google Address Link<span class="text-danger">*</span></label>
                        <input type="url" name="address_link" required placeholder="Enter Address Link" class="form-control" id="address_link">
                    </div>

                    <div class="form-group">
                        <label for="history">History<span class="text-danger">*</span></label>
                        <textarea name="history" required class="form-control summernote-editor" id="history"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="mission">Mission<span class="text-danger">*</span></label>
                        <textarea name="mission" required class="form-control summernote-editor" id="mission"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="vision">Vision<span class="text-danger">*</span></label>
                        <textarea name="vision" required class="form-control summernote-editor" id="vision"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="value">Value<span class="text-danger">*</span></label>
                        <textarea name="value" required class="form-control summernote-editor" id="value"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $('#profile_info').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var myformData = new FormData($('#profile_info')[0]);
        $.ajax({
            type: "post"
            , url: "/profile/create"
            , data: myformData
            , cache: false
            , processData: false
            , contentType: false
            , dataType: "json"
            , success: function(response) {
                console.log(response);
                $("#profile_info").find('input').val('');
                location.reload();
            }
            , error: function(error) {
                console.log(error);
                alert("Data Not Save");
            }
        });
    });


    // function editdetails(id){
    //     $.get("/profile/edit/"+id, function(profile){
    //         $('#id').val(profile.id);
    //         $('#phone_1').val(profile.phoneno);
    //         $('#mobile1_1').val(profile.mobileno1);
    //         $('#mobile2_1').val(profile.mobileno2);
    //         $('#email_1').val(profile.email);
    //         $('#address_1').val(profile.address);
    //         $('#address_link_1').val(profile.address_link);
    //         $('#history_1').html(profile.history);
    //         $('#mission_1').val(profile.mission);
    //         $('#vision_1').val(profile.vision);
    //         $('#value_1').val(profile.value);
    //         // $('#balance').val(bank.balance);
    //         // $('#BankEditModal').modal("toggle");
    //     });
    // }

</script>
@endsection
