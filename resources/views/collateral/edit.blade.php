@extends('layouts.app')

@section('title', 'Collateral')

@section('username')
    {{$username}}
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Collateral</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Collateral</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit Collateral</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to Collateral List">
                            <a href="{{route('collateral')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Verify Collateral
                            </div>
                            <div class="panel-body">
                                <form method="post" action="{{route('collateral.edit.post')}}" autocomplete="off">
                                    <input type="hidden" id="hidCollateralId" name="collateral_id"
                                           value="{{$collateral->collateral_id}}"/>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right"
                                                       for="lblCollateralType">Collateral
                                                    Type</label>
                                                <div class="col-md-8">
                                                    <p>{{$collateral->collateral_type}}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right"
                                                       for="lblCollateralAmount">Collateral
                                                    Amount</label>
                                                <div class="col-md-8">
                                                    <p>{{$collateral->collateral_amount}}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right"
                                                       for="lblUser">User</label>
                                                <div class="col-md-8">
                                                    <p>{{$collateral->email}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Verified</label>
                                                <div class="col-md-8">
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" id="rbIsVerifiedYes" value="Y"
                                                               name="collateral_verified" {{$collateral->collateral_verified == "Y" ? "checked" : "" }}>
                                                        <label for="rbIsVerifiedYes">Yes</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" id="rbIsVerifiedNo" value="N"
                                                               name="collateral_verified" {{$collateral->collateral_verified == "N" ? "checked" : "" }}>
                                                        <label for="rbIsVerifiedNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Stacked</label>
                                                <div class="col-md-8">
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" id="rbIsStackedYes" value="Y"
                                                               name="collateral_staked" {{$collateral->collateral_staked == "Y" ? "checked" : "" }}>
                                                        <label for="rbIsStackedYes">Yes</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" id="rbIsStackedNo" value="N"
                                                               name="collateral_staked" {{$collateral->collateral_staked == "N" ? "checked" : "" }}>
                                                        <label for="rbIsStackedNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <div class="col-md-offset-4 col-md-8">
                                                    <input type="submit" value="Update" name="edit"
                                                           class="btn btn-primary"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
