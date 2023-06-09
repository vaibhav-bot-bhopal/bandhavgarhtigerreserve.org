@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Safari Zone')

@push('css')
    <style>
        table.table-bordered {
            border: 1px solid #000;
            margin-top: 20px;
        }

        table.table-bordered>thead>tr>th {
            border: 1px solid #000;
        }

        table.table-bordered>tbody>tr>th {
            border: 1px solid #000;
        }

        table.table-bordered>tbody>tr>td {
            border: 1px solid #000;
        }

    </style>
@endpush

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
                            {{ trans('navbar.safari-zones') }}
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
                    <x-tourist-sidebar />
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="box-title mb-20">
                        <h2>{{ trans('navbar.safari-zones') }}</h2>
                    </div>

                    <div class="full-pic">
                        <figure>
                            <img src="{{ asset('public/assets/images/btr_actual_image/btr_image57.jpg') }}" alt="">
                        </figure>
                    </div>

                    <div class="text-box mt-40">
                        <div class="text-content text-justify">
                            <p>{{ trans('tourist.zone-p1') }}</p>
                            <p>{{ trans('tourist.zone-p2') }}</p>
                            <p>{{ trans('tourist.zone-p3') }}</p>
                            <p>{{ trans('tourist.zone-p4') }}</p>
                            <p>{{ trans('tourist.zone-p5') }}</p>
                            <p><b>{{ trans('tourist.zone-p6') }}</b>
                            <p>
                            <p><b>{{ trans('tourist.zone-p7') }}</b></p>
                            <p><b>{{ trans('tourist.zone-p8') }}</b></p>

                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th1') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th2') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th3') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th4') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th5') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th6') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th7') }}</th>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t3.th8') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr1.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr2.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr3.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr4.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr5.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t3.tr6.td8') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p><b>{{ trans('tourist.zone-p9') }}</b></p>

                            <div class="table-responsive">
                                <table class="table table-bordered" style="border-color: #000;">
                                    <tbody>
                                        <tr>
                                            <th class="text-center" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th1') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th2') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th3') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th4') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th5') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th6') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th7') }}</th>
                                            <th class="text-cent4r" style="vertical-align: middle;">
                                                {{ __('tourist.t4.th8') }}</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr1.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr2.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr3.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr4.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr5.td8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td1') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td2') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td3') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td4') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td5') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td6') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td7') }}</td>
                                            <td class="text-center">{{ __('tourist.t4.tr6.td8') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
