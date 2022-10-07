@extends('frontend.layouts.index')


@section('title')
    
@endsection


@section('css')
    
@endsection


@section('content')
    <section class="ticker">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news">
                            <span class="d-flex align-items-center"><i class="fa fa-microphone" aria-hidden="true" style="padding-right:8px; font-size: 34px;"></i>
                                News
                            </span>
                        </div>
                        <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#">Excepteur sint occaecat cupidatat non proident, sunt
                                in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span>
                            <a href="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                            </a> 
                            <span class="dot"></span> 
                            <a href="#">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse 
                            </a>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('frontend_assets/img/casino.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('frontend_assets/img/casino2.PNG') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('frontend_assets/img/casino3.PNG') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('frontend_assets/img/casino3.PNG') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('frontend_assets/img/casino4.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </section>

    
@endsection




@section('js')
    
@endsection