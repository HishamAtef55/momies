<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- laravel head -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    

    <!-- end laravel head -->
    <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="application-name" content="Ecwid Control Panel">


		<title>Login | Ecwid E-commerce</title>
		<meta name="description" content="Log in to your Ecwid account to manage your online business">

			<link rel="stylesheet" href="{{ asset('style.css') }}">
			 <!-- google fonts cdn  -->
			 <link rel="preconnect" href="https://fonts.googleapis.com" />
			 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
			 <link
			   href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@300&family=Work+Sans:wght@400;500;600;700;800&display=swap"
			   rel="stylesheet"
			 />
</head>
<body
  
     

        <main>
            @yield('content')
        </main>
   

    <script src="{{asset('main.js')}}"></script>
</body>
</html>
