@extends('layouts.account')

@section('title', 'Login')

@section('content')
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Welcome to Lend-It</h2>
                <p>
                    Welcome to the Admin Login of Lend-It. The future of Cryto Currency awaits you at your fingertips, one Blockchain at a time.
                </p>
                <p>
                    The Admin Dashboard offers the ability to manage the platform at its optimal level.
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="{{ route('login.post') }}" method="post" autocomplete="off">
                        @if (Session::has('returnMessage'))
                            <div class="alert alert-warning" role="alert">
                                    {{ Session::get('returnMessage') }}
                            </div>
                        @endif
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" id="txtEmail" name="email" placeholder="Email"
                                   value="{{ old('email') }}"
                                   class="form-control"/>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" id="txtPassword" name="password" placeholder="Password"
                                   class="form-control"/>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                        <input type="submit" class="btn btn-primary block full-width m-b" value="Login"/>
                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{route('register')}}">Create an account</a>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Team AI
            </div>
            <div class="col-md-6 text-right">
                <small>© <?php echo date("Y"); ?></small>
            </div>
        </div>
    </div>
@endsection

