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
                        <h5>Create Collateral</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to Collateral List">
                            <a href="{{route('collateral')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{route('collateral.create.post')}}" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row{{ $errors->has('collateral_type') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right" for="txtCollateralType">Collateral
                                            Type</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCollateralType" name="collateral_type"
                                                   placeholder="Collateral Type" class="form-control" value="{{ old('collateral_type') }}"/>
                                            @if ($errors->has('collateral_type'))
                                                <span class="help-block">
                                                {{ $errors->first('collateral_type') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row{{ $errors->has('collateral_amount') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right" for="txtCollateralAmount">Collateral Amount</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCollateralAmount" name="collateral_amount"
                                                   placeholder="Collateral Amount" class="form-control" value="{{ old('collateral_amount') }}"/>
                                            @if ($errors->has('collateral_amount'))
                                                <span class="help-block">
                                                {{ $errors->first('collateral_amount') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-offset-4 col-md-8">
                                            <input type="submit" value="Create" name="create" class="btn btn-primary"/>
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
@endsection

@section('scripts')
@endsection
