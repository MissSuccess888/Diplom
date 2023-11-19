<!doctype html>
<html lang="en">

@include('inc.head')
<body>
  <!-- preloader section -->
	<section class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</section>

@include('inc.navadmin1')

@yield('content')

@include('inc.footer')	
@include('inc.script')
</body>
</html>