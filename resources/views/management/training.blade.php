@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Training and Awareness')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.btr-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.btr-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.training') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Service Section -->
    <div id="services-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sx-12">
                    <x-management-sidebar />
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.training') }}</h2>
                    </div>

                    <div class="full-pic">
                        <figure>
                            <img src="{{ asset('public/assets/images/btr_actual_image/btr_image53.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <h4 style="font-size: 20px;">{!! trans('management.train-p13') !!}</h4>
                            <ul class="pl-3">
                                <b>
                                    <li class="mb-3">{!! trans('management.train-l13') !!}</li>
                                </b>
                            </ul>

                            <div class="full-pic">
                                <figure>
                                    <img src="{{ asset('public/assets/images/btr_actual_image/btr_image73.jpg') }}"
                                        alt="">
                                </figure>
                            </div>

                            <div class="full-pic">
                                <figure>
                                    <img src="{{ asset('public/assets/images/btr_actual_image/btr_image75.jpg') }}"
                                        alt="">
                                </figure>
                            </div>

                            <div class="full-pic">
                                <figure>
                                    <img src="{{ asset('public/assets/images/btr_actual_image/btr_image76.jpg') }}"
                                        alt="">
                                </figure>
                            </div>

                            <div class="full-pic">
                                <figure>
                                    <img src="{{ asset('public/assets/images/btr_actual_image/btr_image77.jpg') }}"
                                        alt="">
                                </figure>
                            </div>

                            <ul class="pl-3">
                                <li class="mb-3">{!! trans('management.train-l14') !!}</li>
                            </ul>
                            <p>{!! trans('management.train-p14') !!}</p>

                            <div class="full-pic">
                                <figure>
                                    <img src="{{ asset('public/assets/images/btr_actual_image/btr_image74.jpg') }}"
                                        alt="">
                                </figure>
                            </div>

                            <ul class="pl-3">
                                <li class="mb-3">{!! trans('management.train-l15') !!}</li>
                                <li class="mb-3">{!! trans('management.train-l16') !!}</li>
                            </ul>

                            <h4 style="font-size: 20px;">{{ trans('management.train-p1') }}</h4>
                            <p>{{ trans('management.train-p2') }}</p>
                            <p>{{ trans('management.train-p3') }}</p>
                            <p>{{ trans('management.train-p4') }}</p>

                            <h4 style="font-size: 20px;">{{ trans('management.train-p5') }}</h4>
                            <p>{{ trans('management.train-p6') }}</p>
                            <p>{{ trans('management.train-p7') }}</p>
                            <h4 style="font-size: 20px;">{{ trans('management.train-p8') }}</h4>
                            <p>{{ trans('management.train-p9') }}</p>
                            <ul class="pl-3">
                                <li class="mb-3">{{ trans('management.train-l1') }}</li>
                                <li class="mb-3">{{ trans('management.train-l2') }}</li>
                                <li class="mb-3">{{ trans('management.train-l3') }}</li>
                                <li class="mb-3">{{ trans('management.train-l4') }}</li>
                                <li class="mb-3">{{ trans('management.train-l5') }}</li>
                                <li class="mb-3">{{ trans('management.train-l6') }}</li>
                                <li class="mb-3">{{ trans('management.train-l7') }}</li>
                            </ul>

                            <h4 style="font-size: 20px;">{{ trans('management.train-p10') }}</h4>
                            <p>{{ trans('management.train-p11') }}</p>
                            <ul class="pl-3">
                                <li class="mb-3">{{ trans('management.train-l8') }}</li>
                                <li class="mb-3">{{ trans('management.train-l9') }}</li>
                                <li class="mb-3">{{ trans('management.train-l10') }}</li>
                                <li class="mb-3">{{ trans('management.train-l11') }}</li>
                                <li class="mb-3">{{ trans('management.train-l12') }}</li>
                            </ul>
                            <p>{{ trans('management.train-p12') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
