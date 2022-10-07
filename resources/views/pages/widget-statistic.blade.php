@extends('layouts.main') 
@section('title', 'Widget Statistic')
@section('content')
    <!-- push external head elements to head -->
    @push('head')

        <link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
    @endpush


    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-layers bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Widget Statistic')}}</h5>
                            <span>{{ __('lorem ipsum dolor sit amet, consectetur adipisicing elit')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Widgets')}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Widget Statistic')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- page statustic chart start -->
            <div class="col-xl-3 col-md-6">
                <div class="card card-red text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">2,563</h4>
                                <p class="mb-0">Visits</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-user f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart1" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-blue text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">3,612</h4>
                                <p class="mb-0">Orders</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-shopping-cart f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart2" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-green text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">8,654</h4>
                                <p class="mb-0">Likes</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-thumbs-up f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart3" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-yellow text-white">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="mb-0">3,550</h4>
                                <p class="mb-0">Reviews</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="ik ik-volume-2 f-30"></i>
                            </div>
                        </div>
                        <div id="Widget-line-chart4" class="chart-line chart-shadow" ></div>
                    </div>
                </div>
            </div>
            <!-- page statustic chart end -->

            <!-- Project statustic start -->
            <div class="col-xl-12">
                <div class="card proj-progress-card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <h6>{{ __('Published Project')}}</h6>
                                <h5 class="mb-30 fw-700">532<span class="text-green ml-10">+1.69%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-red" style="width:25%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>{{ __('Completed Task')}}</h6>
                                <h5 class="mb-30 fw-700">4,569<span class="text-red ml-10">-0.5%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-blue" style="width:65%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>{{ __('Successfull Task')}}</h6>
                                <h5 class="mb-30 fw-700">89%<span class="text-green ml-10">+0.99%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-green" style="width:85%"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <h6>{{ __('Ongoing Project')}}</h6>
                                <h5 class="mb-30 fw-700">365<span class="text-green ml-10">+0.35%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar bg-yellow" style="width:45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project statustic end -->

            <!-- social statusric start -->
            <div class="col-xl-4 col-md-12">
                <div class="card sos-st-card facebook">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0"><i class="fab fa-facebook-f"></i> 3.56k</h3>
                            </div>
                            <div class="col-auto">
                                <h5 class="mb-0">Likes</h5>
                            </div>
                            <div class="col-auto"><i class="fas fa-arrow-up text-green"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card sos-st-card twitter">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0"><i class="fab fa-twitter"></i> 3k</h3>
                            </div>
                            <div class="col-auto">
                                <h5 class="mb-0">Followers</h5>
                            </div>
                            <div class="col-auto"><i class="fas fa-arrow-up text-green"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card sos-st-card linkedin">
                    <div class="card-block">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0"><i class="fab fa-linkedin-in"></i> 2k</h3>
                            </div>
                            <div class="col-auto">
                                <h5 class="m-b-0">Connections</h5>
                            </div>
                            <div class="col-auto"><i class="fas fa-arrow-down text-red"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- social statusric end -->

            <!-- imprestion, goal, impect start -->
            <div class="col-xl-4 col-md-12">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25">Impressions</h6>
                                <h3 class="fw-700 text-blue">1,563</h3>
                                <p class="mb-0">May 23 - June 01 (2017)</p>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-eye bg-blue"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25">Goal</h6>
                                <h3 class="fw-700 text-green">30,564</h3>
                                <p class="mb-0">May 23 - June 01 (2017)</p>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-bullseye bg-green"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-25">Impact</h6>
                                <h3 class="fw-700 text-yellow">42.6%</h3>
                                <p class="mb-0">May 23 - June 01 (2017)</p>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-hand-paper bg-yellow"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- imprestion, goal, impect end -->

            <!-- project-ticket start -->
            <div class="col-xl-4 col-md-12">
                <div class="card proj-t-card">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col-auto">
                                <i class="far fa-calendar-check text-red f-30"></i>
                            </div>
                            <div class="col pl-0">
                                <h6 class="mb-5">Ticket Answered</h6>
                                <h6 class="mb-0 text-red">Live Update</h6>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <h6 class="mb-0">327</h6></div>
                            <div class="col"><i class="fas fa-exchange-alt text-red f-18"></i></div>
                            <div class="col">
                                <h6 class="mb-0">10 Days</h6></div>
                        </div>
                        <h6 class="pt-badge bg-red">53%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card proj-t-card">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col-auto">
                                <i class="fas fa-paper-plane text-green f-30"></i>
                            </div>
                            <div class="col pl-0">
                                <h6 class="mb-5">Project Launched</h6>
                                <h6 class="mb-0 text-green">Live Update</h6>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <h6 class="mb-0">3 Year</h6></div>
                            <div class="col"><i class="fas fa-exchange-alt text-green f-18"></i></div>
                            <div class="col">
                                <h6 class="mb-0">623</h6></div>
                        </div>
                        <h6 class="pt-badge bg-green">76%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card proj-t-card">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col-auto">
                                <i class="fas fa-lightbulb text-yellow f-30"></i>
                            </div>
                            <div class="col pl-0">
                                <h6 class="mb-5">Unique Innovation</h6>
                                <h6 class="mb-0 text-yellow">Live Update</h6>
                            </div>
                        </div>
                        <div class="row align-items-center text-center">
                            <div class="col">
                                <h6 class="mb-0">1 Month</h6></div>
                            <div class="col"><i class="fas fa-exchange-alt text-yellow f-18"></i></div>
                            <div class="col">
                                <h6 class="mb-0">248</h6></div>
                        </div>
                        <h6 class="pt-badge bg-yellow">73%</h6>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->

            <!-- product profit start -->
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-red">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col">
                                <h6 class="mb-5 text-white">Total Profit</h6>
                                <h3 class="mb-0 fw-700 text-white">$1,783</h3>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-money-bill-alt text-red f-18"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white"><span class="label label-danger mr-10">+11%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-blue">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col">
                                <h6 class="mb-5 text-white">Total Orders</h6>
                                <h3 class="mb-0 fw-700 text-white">15,830</h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-database text-blue f-18"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white"><span class="label label-primary mr-10">+12%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-green">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col">
                                <h6 class="mb-5 text-white">Average Price</h6>
                                <h3 class="mb-0 fw-700 text-white">$6,780</h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign text-green f-18"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white"><span class="label label-success mr-10">+52%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-yellow">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col">
                                <h6 class="mb-5 text-white">Product Sold</h6>
                                <h3 class="mb-0 fw-700 text-white">6,784</h3>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tags text-warning f-18"></i>
                            </div>
                        </div>
                        <p class="mb-0 text-white"><span class="label label-warning mr-10">+52%</span>From Previous Month</p>
                    </div>
                </div>
            </div>
            <!-- product profit end -->

            <!-- ticket, proj, clent start -->
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="mb-30 bg-red lbl-card"><i class="fas fa-folder-open"></i> Open Tickets</p>
                        <div class="text-center">
                            <h2 class="mb-0 d-inline-block text-red">128</h2>
                            <p class="mb-0 d-inline-block">Tickets</p>
                            <p class="mb-0 mt-15"><i class="fas fa-caret-down mr-10 f-18 text-red"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="mb-30 bg-blue lbl-card"><i class="fas fa-file-archive"></i> Close Tickets</p>
                        <div class="text-center">
                            <h2 class="mb-0 d-inline-block text-blue">134</h2>
                            <p class="mb-0 d-inline-block">Tickets</p>
                            <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-blue"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="mb-30 bg-green lbl-card"><i class="fas fa-users"></i> New Clients</p>
                        <div class="text-center">
                            <h2 class="mb-0 d-inline-block text-green">307</h2>
                            <p class="mb-0 d-inline-block">Clients</p>
                            <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                    <div class="card-body">
                        <p class="mb-30 bg-warning lbl-card"><i class="fas fa-database"></i> New Orders</p>
                        <div class="text-center">
                            <h2 class="mb-0 d-inline-block text-warning">231</h2>
                            <p class="mb-0 d-inline-block">Orders</p>
                            <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-warning"></i>From Previous Month</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ticket, proj, clent end -->

            <!-- analytic card start -->
            <div class="col-xl-4 col-md-12">
                <div class="card analytic-card card-green">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart text-green f-18 analytic-icon"></i>
                            </div>
                            <div class="col text-right">
                                <h3 class="mb-5 text-white">15,678</h3>
                                <h6 class="mb-0 text-white">Total Sales</h6>
                            </div>
                        </div>
                        <p class="mb-0  text-white d-inline-block">Total Income : </p>
                        <h5 class=" text-white d-inline-block mb-0 ml-10">$2,451</h5>
                        <h6 class="mb-0 d-inline-block  text-white float-right"><i class="fas fa-caret-up mr-10 f-18"></i>10%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card analytic-card card-blue">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col-auto">
                                <i class="fas fa-users text-blue f-18 analytic-icon"></i>
                            </div>
                            <div class="col text-right">
                                <h3 class="mb-5 text-white">1,678</h3>
                                <h6 class="mb-0 text-white">Total Users</h6>
                            </div>
                        </div>
                        <p class="mb-0 text-white d-inline-block">Total Revenue : </p>
                        <h5 class="text-white d-inline-block mb-0 ml-10">$2,451</h5>
                        <h6 class="mb-0 d-inline-block text-white float-right"><i class="fas fa-caret-up mr-10 f-18"></i>30%</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card analytic-card card-red">
                    <div class="card-body">
                        <div class="row align-items-center mb-30">
                            <div class="col-auto">
                                <i class="fas fa-file-code text-red f-18 analytic-icon"></i>
                            </div>
                            <div class="col text-right">
                                <h3 class="mb-5 text-white">15,678</h3>
                                <h6 class="mb-0 text-white">Total Project</h6>
                            </div>
                        </div>
                        <p class="mb-0 d-inline-block text-white">Active Projects : </p>
                        <h5 class="text-white d-inline-block mb-0 ml-10">$2,451</h5>
                        <h6 class="mb-0 d-inline-block text-white float-right"><i class="fas fa-caret-down mr-10 f-18"></i>10%</h6>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->

            <!-- analytic card start -->
            <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>{{ __('Facebook Source')}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-10">Page Profile</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-facebook" style="width:25%"></div>
                        </div>
                        <p class="m-b-10">Favorite</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-facebook" style="width:85%"></div>
                        </div>
                        <p class="mb-10">Like Story</p>
                        <div class="progress">
                            <div class="progress-bar bg-facebook" style="width:65%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>{{ __('Twitter Source')}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-10">Wall Profile</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-twitter" style="width:85%"></div>
                        </div>
                        <p class="mb-10">Favorite</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-twitter" style="width:25%"></div>
                        </div>
                        <p class="mb-10">Like Tweets</p>
                        <div class="progress">
                            <div class="progress-bar bg-twitter" style="width:65%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>{{ __('Google+ Source')}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-10">Profile</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-google" style="width:65%"></div>
                        </div>
                        <p class="mb-10">Connect</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-google" style="width:15%"></div>
                        </div>
                        <p class="mb-10">Like News</p>
                        <div class="progress">
                            <div class="progress-bar bg-google" style="width:95%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                    <div class="card-header">
                        <h5>{{ __('Linkedin Source')}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-10">Profile</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-linkedin" style="width:45%"></div>
                        </div>
                        <p class="mb-10">Connect</p>
                        <div class="progress mb-30">
                            <div class="progress-bar bg-linkedin" style="width:85%"></div>
                        </div>
                        <p class="mb-10">Like Posts</p>
                        <div class="progress">
                            <div class="progress-bar bg-linkedin" style="width:35%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->

            <!-- peoduct statustic start -->
            <div class="col-xl-12">
                <div class="card product-progress-card">
                    <div class="card-block">
                        <div class="row pp-main">
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center mb-20">
                                        <div class="col-auto">
                                            <i class="fas fa-cube f-24 text-mute"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h2 class="mb-0 text-blue">2476</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-15">
                                        <div class="col-auto">
                                            <p class="mb-0">Total Product</p>
                                        </div>
                                        <div class="col text-right">
                                            <p class="mb-0 text-blue"><i class="fas fa-long-arrow-alt-up mr-10"></i>64%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" style="width:45%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center mb-20">
                                        <div class="col-auto">
                                            <i class="fas fa-tag f-24 text-mute"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h2 class="mb-0 text-red">843</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-15">
                                        <div class="col-auto">
                                            <p class="mb-0">New Orders</p>
                                        </div>
                                        <div class="col text-right">
                                            <p class="mb-0 text-red"><i class="fas fa-long-arrow-alt-down mr-10"></i>34%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-red" style="width:75%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center mb-20">
                                        <div class="col-auto">
                                            <i class="fas fa-random f-24 text-mute"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h2 class="mb-0 text-c-yellow">63%</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-15">
                                        <div class="col-auto">
                                            <p class="mb-0">Conversion Rate</p>
                                        </div>
                                        <div class="col text-right">
                                            <p class="mb-0 text-yellow"><i class="fas fa-long-arrow-alt-up mr-10"></i>64%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-yellow" style="width:65%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="pp-cont">
                                    <div class="row align-items-center mb-20">
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign f-24 text-mute"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h2 class="mb-0 text-green">41M</h2>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-15">
                                        <div class="col-auto">
                                            <p class="mb-0">Conversion Rate</p>
                                        </div>
                                        <div class="col text-right">
                                            <p class="mb-0 text-green"><i class="fas fa-long-arrow-alt-up mr-10"></i>54%</p>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-green" style="width:35%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- peoduct statustic end -->

            <!-- analytic card start -->
            <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                    <div class="card-body text-center">
                        <h2 class="text-facebook mb-20"><i class="fab fa-facebook-f"></i></h2>
                        <h3 class="text-facebook fw-700">6,750</h3>
                        <p>Likes</p>
                        <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>223 from last 7 days</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                    <div class="card-body text-center">
                        <h2 class="text-twitter mb-20"><i class="fab fa-twitter"></i></h2>
                        <h3 class="text-twitter fw-700">9,752</h3>
                        <p>Tweets</p>
                        <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>623 from last 7 days</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                    <div class="card-body text-center">
                        <h2 class="text-dribbble mb-20"><i class="fab fa-dribbble"></i></h2>
                        <h3 class="text-dribbble fw-700">8,752</h3>
                        <p>Followers</p>
                        <p class="mb-0 mt-15"><i class="fas fa-caret-up mr-10 f-18 text-green"></i>623 from last 7 days</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                    <div class="card-body text-center">
                        <h2 class="text-linkedin mb-20"><i class="fab fa-linkedin-in"></i></h2>
                        <h3 class="text-linkedin fw-700">952</h3>
                        <p>Followers</p>
                        <p class="mb-0 mt-15"><i class="fas fa-caret-down mr-10 f-18 text-red"></i>98 from last 7 days</p>
                    </div>
                </div>
            </div>
            <!-- project-ticket end -->

            <!-- analytic card start -->
            <div class="col-xl-4 col-md-12">
                <div class="card bg-facebook soc-cont-card">
                    <div class="card-block">
                        <div class="soc-slider">
                            <div class="owl-carousel" id="fb-slider">
                                <div class="item">
                                    <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                                    <div class="num-block">
                                        <i class="far fa-thumbs-up mr-10"></i>5
                                    </div>
                                    <div class="num-block">
                                        <i class="far fa-comments mr-10"></i>1
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                                    <div class="num-block">
                                        <i class="far fa-thumbs-up mr-10"></i>5
                                    </div>
                                    <div class="num-block">
                                        <i class="far fa-comments mr-10"></i>1
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i class="fab fa-facebook-f soc-cont-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-twitter soc-cont-card">
                    <div class="card-block">
                        <div class="soc-slider">
                            <div class="owl-carousel" id="tw-slider">
                                <div class="item">
                                    <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                                    <div class="num-block">
                                        <i class="far fa-thumbs-up mr-10"></i>5
                                    </div>
                                    <div class="num-block">
                                        <i class="far fa-comments mr-10"></i>1
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                                    <div class="num-block">
                                        <i class="far fa-thumbs-up mr-10"></i>5
                                    </div>
                                    <div class="num-block">
                                        <i class="far fa-comments mr-10"></i>1
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i class="fab fa-twitter soc-cont-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-google soc-cont-card">
                    <div class="card-block">
                        <div class="soc-slider">
                            <div class="owl-carousel" id="gp-slider">
                                <div class="item">
                                    <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                                    <div class="num-block">
                                        <i class="far fa-thumbs-up mr-10"></i>5
                                    </div>
                                    <div class="num-block">
                                        <i class="far fa-comments mr-10"></i>1
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                                    <div class="num-block">
                                        <i class="far fa-thumbs-up mr-10"></i>5
                                    </div>
                                    <div class="num-block">
                                        <i class="far fa-comments mr-10"></i>1
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i class="fab fa-google-plus-g soc-cont-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
        
        
        
    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
        
        <script src="{{ asset('js/widget-statistic.js') }}"></script>
    @endpush
@endsection
  