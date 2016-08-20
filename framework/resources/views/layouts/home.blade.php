<!doctype html>
<html>
	<head>
		@include('include.head')
	</head>
	<body class="home">
		<div class="container">
			<!-- Home header -->
			<div class="row">
				@include('include.header')
			</div>

			<!-- Main content -->
			<div class="row">
				@yield('content')
			</div>
		</div>
		
		@include('include.footer')

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <!-- Include all compiled plugins (below), or include individual files as needed -->
	  <script src="js/bootstrap.min.js"></script>
	</body>
</html>