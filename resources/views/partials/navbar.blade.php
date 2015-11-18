<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">Listing</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			@if(Auth::check())
			<li><a href="/category">Categories</a></li>
			<li><a href="/listing">Listing</a></li>	
			@endif		
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="/">Admin</a></li>
			@if(!Auth::check())
				<li class="dropdown">			
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>						
					</ul>
				</li>
			@else
				<li class="dropdown">			
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/auth/logout">logout</a></li>						
					</ul>
				</li>
			@endif
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>