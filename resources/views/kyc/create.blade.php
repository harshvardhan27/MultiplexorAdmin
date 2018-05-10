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
                        <h5>Create KYC</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to KYC List">
                            <a href="{{route('kyc')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{route('kyc.create.post')}}" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtFirstname">Firstname</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtFirstname" name="firstname"
                                                   placeholder="Firstname" class="form-control"
                                                   value="{{ old('firstname') }}"/>
                                            @if ($errors->has('firstname'))
                                                <span class="help-block">
                                                {{ $errors->first('firstname') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtLastname">Lastname</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtLastname" name="lastname"
                                                   placeholder="Lastname" class="form-control"
                                                   value="{{ old('lastname') }}"/>
                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                                {{ $errors->first('lastname') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtAddress">Address</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtAddress" name="address"
                                                   placeholder="Address" class="form-control"
                                                   value="{{ old('address') }}"/>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                {{ $errors->first('address') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('city') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtCity">City</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCity" name="city"
                                                   placeholder="City" class="form-control"
                                                   value="{{ old('city') }}"/>
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                {{ $errors->first('city') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('state') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtState">Province</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtState" name="state"
                                                   placeholder="State" class="form-control"
                                                   value="{{ old('state') }}"/>
                                            @if ($errors->has('state'))
                                                <span class="help-block">
                                                {{ $errors->first('state') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('pin') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtPin">Postal Code</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtPin" name="pin"
                                                   placeholder="Pin" class="form-control"
                                                   value="{{ old('pin') }}"/>
                                            @if ($errors->has('pin'))
                                                <span class="help-block">
                                                {{ $errors->first('pin') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row{{ $errors->has('collateral_id') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="ddlCollateral">Collateral</label>
                                        <div class="col-md-8">
                                            <select class="chosen-select form-control" id="ddlCollateral"
                                                    name="collateral_id">
                                                @foreach ($collaterals as $c)
                                                    <option value="{{$c->collateral_id}}">{{$c->collateral_type}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('collateral_id'))
                                                <span class="help-block">
                                                {{ $errors->first('collateral_id') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('ethereum_address') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtEthereumAddress">Ethereum Address</label>
                                        <div class="col-md-8">
                                            <textarea id="txtEthereumAddress" name="ethereum_address"
                                                      placeholder="Ethereum Address" rows="2"
                                                      cols="5" class="form-control">{{ old('ethereum_address') }}
                                            </textarea>
                                            @if ($errors->has('ethereum_address'))
                                                <span class="help-block">
                                                {{ $errors->first('ethereum_address') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('credit_score') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="txtCreditScore">Credit Score</label>
                                        <div class="col-md-8">
                                            <input type="text" id="txtCreditScore" name="credit_score"
                                                   placeholder="Credit Score" class="form-control"
                                                   value="{{ old('credit_score') }}"/>
                                            @if ($errors->has('credit_score'))
                                                <span class="help-block">
                                                {{ $errors->first('credit_score') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('kyc_docs_img1') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="fileKycImage1">Document 1</label>
                                        <div class="col-md-8">
                                            <input type="file" name="kyc_docs_img1" class="form-control" id="fileKycImage1">
                                            @if ($errors->has('kyc_docs_img1'))
                                                <span class="help-block">
                                                {{ $errors->first('kyc_docs_img1') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('kyc_docs_img2') ? ' has-error' : '' }}">
                                        <label class="control-label col-md-4 text-right"
                                               for="fileKycImage2">Document 2</label>
                                        <div class="col-md-8">
                                            <input type="file" name="kyc_docs_img2" class="form-control" id="fileKycImage2">
                                            @if ($errors->has('kyc_docs_img2'))
                                                <span class="help-block">
                                                {{ $errors->first('kyc_docs_img2') }}
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('.chosen-select').chosen({
                width: "100%",
                allow_single_deselect: true
            });
        });
    </script>e
@endsection
