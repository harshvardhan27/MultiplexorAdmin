<!DOCTYPE html>
<html>
<head>
    <title>Lend-It | Restricted Access</title>

    <link rel="stylesheet" href="{!! asset('css/bootstrap/css/bootstrap.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}"/>
</head>
<body class="gray-bg">
<div class="middle-box text-center animated fadeInDown">
    <h1>403</h1>
    <h3 class="font-bold">Restricted Access</h3>

    <div class="error-desc">
        Access to the resource is restricted. <br/>
        <form method="post" action="{{ route('logout') }}">
            <button type="submit" value="Back to Login" class="btn btn-primary m-t" id="btnBacktoLogin">Back to Login
            </button>
            {{ csrf_field() }}
        </form>
    </div>
</div>

<script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>

</body>
</html>
