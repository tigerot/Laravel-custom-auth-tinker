<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
    <div class="row" style="margin-top:45px>
        <div class="col-md-4 col-md-offset-4">
        <h4>Login</h4><hr>
        <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
            @endif
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter an email address" value="{{ old('email') }}">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter the password">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
            <br>
            <a href="{{ route('auth.register') }}">I don't have an account</a>
        </form>

        </div>
    </div>
</div>
</body>
</html>