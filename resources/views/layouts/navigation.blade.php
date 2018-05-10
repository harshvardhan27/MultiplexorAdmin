<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Lend-IT | Admin</strong>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    Lend IT
                </div>
            </li>
            <li class="{{ isActiveRoute('dashboard') }}">
                <a href="{{ route('dashboard') }}"><i class="fa fa-tachometer"></i>
                    <span class="nav-label">Dashboard</span></a>
            </li>
            <li class="{{ isActiveRoute('collateral') }}">
                <a href="{{route('collateral')}}"><i class="fa fa-folder"></i>
                    <span class="nav-label">Collaterals</span></a>
            </li>
            <li class="{{isActiveRoute('kyc')}}">
                <a href="{{route('kyc')}}"><i class="fa fa-user"></i>
                    <span class="nav-label">KYC Verification</span></a>
            </li>

        </ul>
    </div>
</nav>
