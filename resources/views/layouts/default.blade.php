<html>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css"/>
	
	<link rel="stylesheet" href="css/app.css"> 
  </head>
  <body>
  		@include('elements.header')
		
		<div class="container" style="padding-top:50px;">
			@yield('content')
		</div>

		@include('elements.footer')
  </body>
</html>
