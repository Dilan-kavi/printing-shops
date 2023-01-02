@extends('layouts.customer')

@section('content')

<head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head> 
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <header class="masthead" style="background: url(&quot;assets/img/printshop.jpg&quot;);">
    <div class="container">
            <div class="intro-text">
            <a class="btn btn-primary btn-xl text-uppercase" role="button" href="{{ route('available', ['id'=>1]) }}">Self Learning Area Print Shop</a>
            <br><br>
            <a class="btn btn-primary btn-xl text-uppercase" role="button" href="{{ route('available', ['id'=>2]) }}">Main Library Print Shop</a>
            <br><br>
            <a class="btn btn-primary btn-xl text-uppercase" role="button" href="{{ route('available', ['id'=>3]) }}">Science Canteen Print Shop</a>
            </div>
        </div>
    </header>
    

</body>
@endsection