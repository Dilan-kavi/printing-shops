

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
    <header class="masthead" style="background: url(&quot;assets/img/istockphoto-666964830-612x612.jpg&quot;);">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
            <div class="intro-text">
            
                <a class="btn btn-primary btn-xl text-uppercase" role="button" href="{{ route('check') }}">Create Order</a>
                <br><br>
                <a class="btn btn-primary btn-xl text-uppercase" role="button" href="{{ route('edit') }}">Edit order</a>
            </div>
        </div>
    </header>
    

</body>
@endsection