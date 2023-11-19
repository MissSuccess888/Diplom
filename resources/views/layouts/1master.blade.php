<!doctype html>
<html lang="en">

@include('inc.head')
<body>
  <!-- preloader section -->
	<section class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</section>
	
  @include('inc.nav')
	 @yield('nav')
	
	@include('inc.home')
	@include('inc.gallery')
	@include('inc.menu')
	@include('inc.team')
	@include('inc.booking')
	@include('inc.footer')	
	@include('inc.script')
</body>
</html>