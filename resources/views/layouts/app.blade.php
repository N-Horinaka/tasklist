<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>ToDo List</title>

		<!--Bootstrap CSS, Font Awesome-->
		<link href="{{asset('fontawesome/css/fontawesome.css')}}" rel="stylesheet">

		<link href="{{asset('fontawesome/css/brands.css')}}" rel="stylesheet">

		<link href="{{asset('fontawesome/css/solid.css')}}" rel="stylesheet">

		<!--Bootstrap CDN-->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

		<!--jQuery CDN-->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{url('/')}}">
						ToDo List
					</a>
				</div>
			</nav>
		</div>

		@yield('content')
		
		<!--Bootstrap CDN…JavaScript-->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	</body>
</html>