<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Бронирование</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animate.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/nivo-lightbox.css">
	<link rel="stylesheet" href="/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>

</head>

<body>

<!-- preloader section -->
	<section class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</section>

	<!-- navigation section -->
	<section class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="{{ route('index')}}" class="navbar-brand">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">

				
					@if (Auth())
					<li><a href="{{ route('auth')}}" class="smoothScroll">ГЛАВНАЯ</a></li>
							@else
					<li><a href="{{ route('index')}}" class="smoothScroll">ГЛАВНАЯ</a></li>
					@endif

					@include('feedback.navfeedback')
					@include('feedback.navauth')			

				</ul>
			</div>
		</div>
	</section>
<br><br>
@auth
	<div class="container">
			   <a href="{{ route('bookingUser')}}" class="navbar-brand" > <span style="color:#E91E63;">{{ $name }},</span> здесь вы можете посмотреть свои заявки на бронирование</a>
	</div>
@endauth

 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
       	 <h2 style="color:red;">Спасибо {{ $name }}, что выбрали наш ресторан. Мы свяжемся с Вами!</h2>
        </div>
    </div>

		<!-- footer section -->
	<footer class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<h2 class="heading">Контакты</h2>
					<div class="ph">
						<p><i class="fa fa-phone"></i> Телефон</p>
						<h4>090-080-0760</h4>
					</div>
					<div class="address">
						<p><i class="fa fa-map-marker"></i> Адрес</p>
						<h4>120 Duis aute irure, California, USA</h4>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<h2 class="heading">Часы работы</h2>
					<p>Sunday <span>10:30 AM - 10:00 PM</span></p>
					<p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
					<p>Saturday <span>11:30 AM - 10:00 PM</span></p>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<h2 class="heading">Follow Us</h2>
					<ul class="social-icon">
						<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
						<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
						<li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
						<li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
						<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- copyright section -->
	<section id="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h3>РЕСТОРАН ВКУСНОЙ ЕДЫ</h3>
					<p>Copyright © Restaurant and Cafe

						| Design: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- JAVASCRIPT JS FILES -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.parallax.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


</body>

</html>




</body>
</html>
