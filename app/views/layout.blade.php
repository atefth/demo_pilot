<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Pilot</title>    
    <!-- Referencing Bootstrap CSS that is hosted locally -->
    {{ HTML::style('css/bootstrap.min.css') }}
    </head>
    <body>
    	<div class="row-fluid container">
	        <div class="navbar well">
			  <div class="navbar-inner">
			    <ul class="nav nav-pills">
			    	<li><a href="http://softbotsys.herokuapp.com">SoftBot Systems</a></li>	 
				</ul>
			  </div>
			</div>
			@yield('content')
			<div class="span8 offset4 well text-center" style="margin-top:250px;">&#169; 2014 SoftBot Systems</div>
		</div>
	</div>
	<!-- Referencing Bootstrap JS that is hosted locally -->
    {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>