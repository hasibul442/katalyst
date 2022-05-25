@extends('Layout.master')
@section('title', 'Candidate List')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Job</a></li>
                    <li class="breadcrumb-item active">Candidate List</li>
                </ol>
            </div>
            <h4 class="page-title">Candidate List</h4>
        </div>
    </div>
</div>


<section>
    <div class="card pb-3">
        <div class="card-body">
            <h1 class="text-center">Position Name: <span class="text-primary">{{ $jobposts->position_name }}</span></h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="h5">Job Post Date: </span><span>{{ $jobposts->created_at }}</span>
                </div>
                <div class="col-md-4">
                    <span class="h5">Dead Line: </span><span>{{ $jobposts->application_dead_line }}</span>
                </div>
                <div class="col-md-4">
                    <span class="h5">Status: </span><span>{{ $jobposts->status }}</span>
                </div>
                <div class="col-md-4">
                    <span class="h5">Vacancy: </span><span>{{ $jobposts->vacancy }}</span>
                </div>
                <div class="col-md-4">
                    <span class="h5">Salary Range: </span><span>{{ $jobposts->salary }}</span>
                </div>
                <div class="col-md-4">
                    <span class="h5">Exprience: </span><span>{{ $jobposts->exprience }}</span>
                </div>
                <div class="col-md-4">
                    <span class="h5">Total Applied: </span><span>{{ App\Models\Applicant::where('job_id', $jobposts->id)->get()->count() }}</span>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Applicant List</h1>

            <div class="table-responsive">
                <table class="display table " id="example">
                    <thead>
                        <tr>
                            <th>SL. No.</th>
                            <th>Applicant Name</th>
                            <th>Last Degree</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach (App\Models\Applicant::where('job_id', $jobposts->id)->get() as $item )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $item->candidate_name }}</td>
                                <td>{{ $item->last_degree }}</td>
                                <td>{{ $item->mobile_number }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->cv }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            responsive: false
        , });
    });

</script>
@endsection
