<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head> 
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <center>
            <form action="/login" method="post">
                <input type = "hidden" name="_token" value="{{ csrf_token() }}">
                Username: <input type="text" name="username"><br/>  
                Password: <input type="password" name="password"><br/>
                <input type="submit" name="login" value="Login">
            </form>
        </center>
    </body>
</html>
  