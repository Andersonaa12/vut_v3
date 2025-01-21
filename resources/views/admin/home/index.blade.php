@extends('layouts.main')

{{-- CSS --}}
@section('extracss')
@stop
{{-- Content --}}
@section('content')

@section('title') Inicio @stop
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                    <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                        <div class="col-8 text-start">
                            <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                                <i class="ni ni-circle-08 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                                <h5 class="text-white font-weight-bolder mb-0 mt-3">
                                    1600
                                </h5>
                            <span class="text-white text-sm">Users Active</span>
                        </div>
                        <div class="col-4">
                            <div class="dropdown text-end mb-6">
                            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h text-white"></i>
                            </a>
                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                            </ul>
                            </div>
                            <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+55%</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-md-0">
                    <div class="card">
                    <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                        <div class="col-8 text-start">
                            <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                            <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                            357
                            </h5>
                            <span class="text-white text-sm">Click Events</span>
                        </div>
                        <div class="col-4">
                            <div class="dropstart text-end mb-6">
                            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h text-white"></i>
                            </a>
                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                            </ul>
                            </div>
                            <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+124%</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-md-0">
                    <div class="card">
                    <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                        <div class="col-8 text-start">
                            <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                            <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            <h5 class="text-white font-weight-bolder mb-0 mt-3">
                            357
                            </h5>
                            <span class="text-white text-sm">Click Events</span>
                        </div>
                        <div class="col-4">
                            <div class="dropstart text-end mb-6">
                            <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-h text-white"></i>
                            </a>
                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                            </ul>
                            </div>
                            <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+124%</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                    <div class="row">
                    <div class="col-8 text-start">
                        <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-cart text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        2300
                        </h5>
                        <span class="text-white text-sm">Purchases</span>
                    </div>
                    <div class="col-4">
                        <div class="dropdown text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                        </div>
                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+15%</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                    <div class="row">
                    <div class="col-8 text-start">
                        <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-cart text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        2300
                        </h5>
                        <span class="text-white text-sm">Purchases</span>
                    </div>
                    <div class="col-4">
                        <div class="dropdown text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                        </div>
                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+15%</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-4 mt-md-0">
                <div class="card">
                <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                <div class="card-body p-3 position-relative">
                    <div class="row">
                    <div class="col-8 text-start">
                        <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                        <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                        940
                        </h5>
                        <span class="text-white text-sm">Likes</span>
                    </div>
                    <div class="col-4">
                        <div class="dropstart text-end mb-6">
                        <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                        </div>
                        <p class="text-white text-sm text-end font-weight-bolder mt-auto mb-0">+90%</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card shadow h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Reviews</h6>
            </div>
            <div class="card-body pb-0 p-3">
                <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                    <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">80%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                        <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-dark">Neutral Reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">17%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                        <div class="progress-bar bg-primary w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    <div class="w-100">
                    <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-dark">Negative Reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">3%</span>
                    </div>
                    <div>
                        <div class="progress progress-md">
                        <div class="progress-bar bg-primary w-5" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </li>
                </ul>
            </div>
            <div class="card-footer pt-0 p-3 d-flex align-items-center">
                <div class="w-60">
                <p class="text-sm">
                    More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b> projects were created.
                </p>
                </div>
                <div class="w-40 text-end">
                <a class="btn btn-dark mb-0 text-end" href="javascript:;">View all reviews</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Projects</h6>
                    <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 done</span> this month
                    </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Companies</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Budget</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Soft UI XD Version</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="team1">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team2">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-3.jpg" alt="team3">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team4">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $14,000 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add Progress Track</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-2.jpg" alt="team5">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="team6">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $3,000 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">10%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Fix Platform Errors</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="team8">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="team9">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> Not set </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Launch our Mobile App</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user1">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                            <img src="../assets/img/team-3.jpg" alt="user2">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                            <img src="../assets/img/team-4.jpg" alt="user3">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-1.jpg" alt="user4">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $20,500 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Add the New Pricing Page</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-4.jpg" alt="user5">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $500 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">25%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Redesign New Online Shop</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                            <img src="../assets/img/team-1.jpg" alt="user6">
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                            <img src="../assets/img/team-4.jpg" alt="user7">
                            </a>
                        </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> $2,000 </span>
                        </td>
                        <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                            <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">40%</span>
                            </div>
                            </div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
{{-- Scripts --}}
@section('scripts')

@stop
