@extends('layouts.app')

@section('title', 'KYC')

@section('username')
    {{$username}}
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Know Your Customer</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>KYC</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit KYC</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to KYC List">
                            <a href="{{route('kyc')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Verify KYC
                            </div>
                            <div class="panel-body">
                                <form method="post" action="{{route('kyc.edit.post')}}"
                                      autocomplete="off">
                                    <input type="hidden" id="hidUserId" name="user_id"
                                           value="{{$userDetail->user_id}}"/>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">User
                                                    name</label>
                                                <div class="col-md-8">
                                                    <p>{{$userDetail->firstname.' '.$userDetail->lastname}}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Address</label>
                                                <div class="col-md-8">
                                                    <p>{{$userDetail->address.", ".$userDetail->city}}</br>
                                                        {{$userDetail->state.", ".$userDetail->pin}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Collateral</label>
                                                <div class="col-md-8">
                                                    <p>{{$collateral->collateral_type}}</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Ethereum
                                                    Address</label>
                                                <div class="col-md-8">
                                                    <p>{{$userDetail->ethereum_address}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row{{ $errors->has('credit_score') ? ' has-error' : '' }}">
                                                <label class="control-label col-md-4 text-right"
                                                       for="txtCreditScore">Credit Score</label>
                                                <div class="col-md-8">
                                                    <input type="text" id="txtCreditScore" name="credit_score"
                                                           placeholder="Credit Score" class="form-control"
                                                           value="{{$userDetail->credit_score}}"/>
                                                    @if ($errors->has('credit_score'))
                                                        <span class="help-block">
                                                                {{ $errors->first('credit_score') }}
                                                                </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Verified</label>
                                                <div class="col-md-8">
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" id="rbIsVerifiedYes" value="Y"
                                                               name="user_profile_verified" {{$userDetail->user_profile_verified == "Y" ? "checked" : "" }}>
                                                        <label for="rbIsVerifiedYes">Yes</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" id="rbIsVerifiedNo" value="N"
                                                               name="user_profile_verified" {{$userDetail->user_profile_verified == "N" ? "checked" : "" }}>
                                                        <label for="rbIsVerifiedNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Locked</label>
                                                <div class="col-md-8">
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" id="rbIsLockedYes" value="Y"
                                                               name="user_profile_locked" {{$userDetail->user_profile_locked == "Y" ? "checked" : "" }}>
                                                        <label for="rbIsLockedYes">Yes</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" id="rbIsLockedNo" value="N"
                                                               name="user_profile_locked" {{$userDetail->user_profile_locked == "N" ? "checked" : "" }}>
                                                        <label for="rbIsLockedNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-4 text-right">Documents</label>
                                                <div class="col-md-8">
                                                    <div class="lightBoxGallery">
                                                        <a href="data:{{$userDetail->kyc_docs_img1_mime}};base64,{{$userDetail->kyc_docs_img1}}"
                                                           data-gallery=""> <img
                                                                    src="data:{{$userDetail->kyc_docs_img1_mime}};base64,{{$userDetail->kyc_docs_img1}}"
                                                                    width="100px" height="100px"
                                                                    alt="Kyc Document 1"
                                                                    class="img-rounded img-responsive img-thumbnail"></a>
                                                        <a href="data:{{$userDetail->kyc_docs_img2_mime}};base64,{{$userDetail->kyc_docs_img2}}"
                                                           data-gallery=""> <img
                                                                    src="data:{{$userDetail->kyc_docs_img2_mime}};base64,{{$userDetail->kyc_docs_img2}}"
                                                                    width="100px" height="100px"
                                                                    alt="Kyc Document 1"
                                                                    class="img-rounded img-responsive img-thumbnail"></a>

                                                        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                                                        <div id="blueimp-gallery" class="blueimp-gallery">
                                                            <div class="slides"></div>
                                                            <h3 class="title"></h3>
                                                            <a class="prev">‹</a>
                                                            <a class="next">›</a>
                                                            <a class="close">×</a>
                                                            <a class="play-pause"></a>
                                                            <ol class="indicator"></ol>
                                                        </div>
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
