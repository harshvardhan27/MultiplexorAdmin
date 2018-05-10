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
                        <h5>Delete Collateral</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to Collateral List">
                            <a href="{{route('collateral')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" action="{{route('collateral.delete.post')}}" autocomplete="off">
                            <input type="hidden" id="hidCollateralId" name="collateral_id"
                                   value="{{$collateral->collateral_id}}">
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
