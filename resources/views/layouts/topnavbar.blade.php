<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to Lend-It, <strong>@yield('username')</strong>.</span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> <span class="label label-primary">{{ count($notifications) }}</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    @foreach ($notifications as $n)
                        @if ($n->notification_type == 'Collateral')
                            <li>
                                <a href="{{route('collateral.edit',['id' => $n->collateral_id])}}">
                                    <div>
                                        <i class="fa fa-address-card fa-fw"></i> {{ $n->email }}
                                        <span class="pull-right text-muted small">Collateral</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        @endif
                        @if ($n->notification_type == 'Profile')
                            <li>
                                <a href="{{route('kyc.edit',['id' => $n->user_id])}}">
                                    <div>
                                        <i class="fa fa-users fa-fw"></i> {{ $n->email }}
                                        <span class="pull-right text-muted small">Profile</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li>
                <form method="post" action="{{ route('logout') }}">
                    <button type="submit" value="Logout" class="btn btn-danger" id="btnLogout" style="margin-top: 0px;">
                        <i class="fa fa-sign-out"></i> Logout
                    </button>
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

    </nav>
</div>
