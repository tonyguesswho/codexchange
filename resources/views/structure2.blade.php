
<!DOCTYPE html>
	<html lang="en">
		<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-compactible" content="IE=edge">
				<title>codexchange</title>

				<!--bootstrap css-->
				<link rel="stylesheet" href="/css/bootstrap.min.css">
				<!--index css-->
				
				<link rel="stylesheet" type="text/css" href="/css/main.css">

				<!---responsive-->
				<link rel="stylesheet" type="text/css" href="css/responsive.css">

		</head>
		<body>
			<div class="body_div">
				@include('layout.header')
					
	
				@yield('content')
			

				



				</div>
					<!--jquery-->
					<script  src="/js/jquery.min.js"></script>
					<!--bootstrap js-->
					<script src="/js/bootstrap.min.js"></script>
					<!--js-->
					<script  src="/js/index.js"></script>
			
		</body>
	</html>