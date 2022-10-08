<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Facebook-Login or Sign up</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
</head>
<body>
    <main>
        <div class="row">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
            <div class="colm-form">
                <div class="form-container">
                    <div>
                    <input id="email" type="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div>
                    <input id="password" type="password" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    </div>
                    <button class="btn-login" type="submit">Login</button>
                    <button class="btn-new" href="/register">Create new Account</button>
                </div>
            </div>
            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>