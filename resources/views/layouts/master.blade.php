<!DOCTYPE html>
<html>
<head>
	<title>Hello @yield('title')</title>
</head>
<body>
	@section('sidebar')
            This is the master sidebar.
    @show

	@yield('content')
</body>

<style>
	html, body 
	{
        font-family: 'Raleway';

    }

    html, footer 
	{
        font-family: 'Arial';
    }


</style>

<footer>
	@yield('footer')
</footer>
</html>