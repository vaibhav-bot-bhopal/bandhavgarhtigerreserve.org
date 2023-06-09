@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Do and Donts')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.dos') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Service Section -->
<div class="faq padding pt-xs-40">
    <div class="container">
        <div class="row text-center pb-30">
            <div class="col-sm-12">
                <div class="heading-box ">
                    <h2>{{ trans('dos.do') }}<span>{{ trans('dos.and') }}</span>{{ trans('dos.dont') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <img src="{{ asset('public/assets/images/btr_actual_image/btr_image47.jpg') }}" class="img-fluid mx-auto d-block" height="400" width="700">
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12" style="border:1px dotted grey;">
                <h4 class="text-center">{{ trans('tourist.dos-h4') }}</h4>
                <hr>
                <ul>
                    <li>{{ trans('tourist.dos-l1') }}</li>
                    <li>{{ trans('tourist.dos-l2') }}</li>
                    <li>{{ trans('tourist.dos-l3') }}</li>
                    <li>{{ trans('tourist.dos-l4') }}</li>
                    <li>{{ trans('tourist.dos-l5') }}</li>
                    <li>{{ trans('tourist.dos-l6') }}</li>
                    <li>{{ trans('tourist.dos-l7') }}</li>
                    <li>{{ trans('tourist.dos-l8') }}</li>
                    <li>{{ trans('tourist.dos-l9') }}</li>
                    <li>{{ trans('tourist.dos-l10') }}</li>
                    <li>{{ trans('tourist.dos-l11') }}</li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12" style="border:1px dotted grey;">
                <h4 class="text-center">{{ trans('tourist.dnt-h4') }}</h4>
                <hr>
                <ul>
                    <li>{{ trans('tourist.dnt-l1') }}</li>
                    <li>{{ trans('tourist.dnt-l2') }}</li>
                    <li>{{ trans('tourist.dnt-l3') }}</li>
                    <li>{{ trans('tourist.dnt-l4') }}</li>
                    <li>{{ trans('tourist.dnt-l5') }}</li>
                    <li>{{ trans('tourist.dnt-l6') }}</li>
                    <li>{{ trans('tourist.dnt-l7') }}</li>
                    <li>{{ trans('tourist.dnt-l8') }}</li>
                    <li>{{ trans('tourist.dnt-l9') }}</li>
                    <li>{{ trans('tourist.dnt-l10') }}</li>
                    <li>{{ trans('tourist.dnt-l11') }}</li>
                </ul>
            </div>
        </div>

        {{-- <div class="row">
            <img src="{{ asset('public/assets/images/team/do_and_donts.jpg') }}" class="img-fluid mx-auto d-block" height="800px">
        </div> --}}
    </div>
</div>
@endsection
