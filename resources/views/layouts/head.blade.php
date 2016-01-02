<section id='header'>
	<div class="top-menu">
		<div class="col-xs-4 header-left-div">
			<a href="#" class="">
				<i class="fa fa-bars"></i>
				<span class="hidden-xs hidden-sm">Groups</span>
			</a>
		</div>
		<div class="col-xs-4 text-center">
			<a href='/' class=''>@yield('appName')</a>
		</div>
		<div class="col-xs-4 header-right-div text-right">fdsfds</div>
	</div>
</section>


<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">@yield('appName')</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" title="Groups">
						<i class="fa fa-group"></i>
						<span class="hidden-sm hidden-md hidden-lg">Groups</span>
					</a>
				</li>
				<li>
					<a href="#" title="notification">
						<i class="fa fa-bell-o"></i>
						<span class="hidden-sm hidden-md hidden-lg">Notificaton</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-cog"></i>
						<span class="hidden-sm">my name</span>
					</a>
				</li>
				<li>
					<a href="#" title="logout">
						<i class="fa fa-sign-out"></i>
						<span class="hidden-sm hidden-md hidden-lg">Logout</span>
					</a>
				</li>
			</ul>
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Search...">
			</form>
		</div>
	</div>
</nav>