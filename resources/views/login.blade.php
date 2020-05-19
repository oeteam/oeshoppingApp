<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <style>
            .box {
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
                padding: 10px
            }
        </style>

        <!-- JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
    </head>
    <body><br>
        <div class="containor box">
            <h3 align="center">Login</h3><br>
            @if($message = Session::get('error')) 
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if(count($errors)>0) 
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error) 
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('/backpanel/login/checkLogin') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
    </body>
</html>
