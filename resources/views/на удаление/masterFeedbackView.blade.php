<!doctype html>
<html lang="en">

@include('inc.head')

<body>
  <!-- preloader section -->
	<section class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</section>

  @include('inc.nav')
			<!-- подключаем секцию из inc.nav -->
						@yield('nav')
									</ul>
								</div>
							</div>
						</section>

  @include('inc.feedbackView')
	@include('inc.footer')	
	@include('inc.script')
</body>
</html>