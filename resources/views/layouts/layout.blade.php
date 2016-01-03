@section('appName', env('APP_DEFAULT_NAME', ''))
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet/less" type="text/css" href="/css/app.less" />
	<script src="/js/lib/less.min.js"></script>
	<title>App Name - @yield('appName')</title>
</head>
<body ng-app="mpApp">
	@section('header')
		@include('layouts.head')
	@show
	@section('body')
		<div class="page-wrapper">
			<ng-view></ng-view>
		</div>
	@show
	<script src="/js/lib/jquery.min.js"></script>
	<script src="js/lib/bootstrap.min.js"></script>
	<script src="/js/lib/angular.min.js"></script>
	<script src="/js/lib/angular-route.js"></script>
	<script src="/js/lib/angular-ui-bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/services.js"></script>
	<script src="/js/controllers.js"></script>
    @section('end-js')
    @show
</body>
</html>