@php
if(!session('user')) {
    header("Location: /");
	exit();
}
@endphp

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
	
	<link rel="icon" href="{{url('assets/images/iconecinemarcos.png')}}">

	<title>CINEMARCOS - Adminstrativo</title>
</head>

<body>	
	<main role="main" class="container">
		@yield('content')
    </main>
	<script src="{{url('assets/bootstrap/jquery-3.2.1.slim.min.js')}}"></script>
	<script src="{{url('assets/bootstrap/popper.min.js')}}"></script>
	<script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>