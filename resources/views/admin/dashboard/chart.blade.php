@extends('admin.layouts._main')

@section('title', 'chart')

@section('styles')
<link rel="stylesheet" href="/theme/plugins/chart-morris/css/morris.css">
@endsection

@section('content')
<div class="pcoded-wrapper">
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Morris Chart</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:">Chart</a></li>
                                <li class="breadcrumb-item"><a href="javascript:">Morris Chart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!-- [ Morris Chart ] start -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bar [ Simple ] Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-bar-chart" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bar [ Stacked ] Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-bar-stacked-chart" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Line [ Angle ] Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-area-chart" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Area [ Smooth ] Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-area-curved-chart" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Line [ Angle ] Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-line-chart" class="ChartShadow" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Line [ Smooth ] Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-line-smooth-chart" class="ChartShadow" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Donut Chart</h5>
                                </div>
                                <div class="card-block">
                                    <div id="morris-donut-chart" style="height:300px"></div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Morris Chart ] end -->
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="/theme/plugins/chart-morris/js/raphael.min.js"></script>
<script src="/theme/plugins/chart-morris/js/morris.min.js"></script>
<script src="/theme/js/pages/chart-morris-custom.js"></script>
@endsection
