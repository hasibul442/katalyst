@extends('Layout.master')
@section('title', 'Dashboard')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Katalyst</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<section>
    <div class="row">
        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body rounded dashboard-card-body-1">
                    <div class='px-3 py-3 justify-content-between'>
                        <div class="row">
                            <div class="col-sm-3 my-auto text-center">
                                <i class="fas fa-users fa-3x dashboard-card-icon"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="card-title text-center">Total User</h4>
                                <div>
                                    <p class="text-center dashboard-card-text">{{ App\Models\User::get()->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body rounded dashboard-card-body-2">
                    <div class='px-3 py-3 justify-content-between'>
                        <div class="row">
                            <div class="col-sm-3 my-auto text-center">
                                <i class="fad fa-abacus fa-3x dashboard-card-icon"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="card-title text-center">Basic Chemicals</h4>
                                <div>
                                    <p class="text-center dashboard-card-text">{{ App\Models\BasicChemicals::get()->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body rounded dashboard-card-body-3">
                    <div class='px-3 py-3 justify-content-between'>
                        <div class="row">
                            <div class="col-sm-3 my-auto text-center">
                                <i class="fas fa-dice-d20 fa-3x dashboard-card-icon"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="card-title text-center">Auxiliary Chemicals</h4>
                                <div>
                                    <p class="text-center dashboard-card-text">{{ App\Models\AuxiliaryChemicals::get()->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body rounded dashboard-card-body-3">
                    <div class='px-3 py-3 justify-content-between'>
                        <div class="row">
                            <div class="col-sm-3 my-auto text-center">
                                <i class="fas fa-dice-d20 fa-3x dashboard-card-icon"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="card-title text-center">Dyestuffs</h4>
                                <div>
                                    <p class="text-center dashboard-card-text">{{ App\Models\Dyestuffs::get()->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card rounded">
                <div class="card-body rounded dashboard-card-body-5">
                    <div class='px-3 py-3 justify-content-between'>
                        <div class="row">
                            <div class="col-sm-3 my-auto text-center">
                                <i class="fab fa-audible fa-3x dashboard-card-icon"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="card-title text-center">Job Opens</h4>
                                <div>
                                    <p class="text-center dashboard-card-text">10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
