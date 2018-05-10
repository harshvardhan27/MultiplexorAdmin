@extends('layouts.app')

@section('title', 'Collateral')

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
                        <h5>Delete KYC</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to KYC List">
                            <a href="{{route('kyc')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{route('kyc.delete.post')}}" autocomplete="off">
                            <input type="hidden" id="hidUserId" name="user_id"
                                   value="{{$userDetail->user_id}}">
                            <div class="alert alert-danger" role="alert">
                                <h4>You are about to delete a master record do you wish to continue?</h4>
                                <input type="submit" value="Delete" name="delete" class="btn btn-danger">
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
