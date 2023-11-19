<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Сайт ресторана</title>

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
				

				<a href="#" class="navbar-brand" style="color:#E91E63;">РЕСТОРАН ВКУСНОЙ ЕДЫ</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="smoothScroll">ГЛАВНАЯ</a></li>
					<li><a href="#gallery" class="smoothScroll">ГАЛЕРЕЯ</a></li>
					<li><a href="#menu" class="smoothScroll">СПЕЦИАЛЬНОЕ МЕНЮ</a></li>
					<li><a href="#team" class="smoothScroll">ПОВАРА</a></li>
					<li><a href="#contact" class="smoothScroll">КОНТАКТЫ</a></li>
					@include('feedback.navfeedback')
					@include('feedback.navauth')

				</ul>
			</div>
		</div>
	</section>



	<!-- home section -->
		<section id="home" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h1>РЕСТОРАН ВКУСНОЙ ЕДЫ</h1>
					<h2>CLEAN &amp; SIMPLE DESIGN</h2>
					<a href="#gallery" class="smoothScroll btn btn-default">УЗНАТЬ БОЛЬШЕ</a>
				</div>
			</div>
		</div>
	</section>


	<!-- gallery section -->
	<section id="gallery" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
					<h1 class="heading">Галерея</h1>
					<hr>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
					<a href="images/gallery-img1.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img1.jpg"
							alt="gallery img"></a>
					<div>
						<h3>Lemon-Rosemary Prawn</h3>
						<span>Seafood / Shrimp / Lemon</span>
					</div>
					<a href="images/gallery-img2.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img2.jpg"
							alt="gallery img"></a>
					<div>
						<h3>Lemon-Rosemary Vegetables</h3>
						<span>Tomato / Rosemary / Lemon</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<a href="images/gallery-img3.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img3.jpg"
							alt="gallery img"></a>
					<div>
						<h3>Lemon-Rosemary Bakery</h3>
						<span>Bread / Rosemary / Orange</span>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
					<a href="images/gallery-img4.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img4.jpg"
							alt="gallery img"></a>
					<div>
						<h3>Lemon-Rosemary Salad</h3>
						<span>Chicken / Rosemary / Green</span>
					</div>
					<a href="images/gallery-img5.jpg" data-lightbox-gallery="zenda-gallery"><img src="images/gallery-img5.jpg"
							alt="gallery img"></a>
					<div>
						<h3>Lemon-Rosemary Pizza</h3>
						<span>Pasta / Rosemary / Green</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- menu section -->
	<section id="menu" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
					<h1 class="heading">Специальное меню</h1>
					<hr>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Lemon-Rosemary Vegetable ................ <span>$20.50</span></h4>
					<h5>Chicken / Rosemary / Lemon</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Lemon-Rosemary Meat ........................... <span>$30.50</span></h4>
					<h5>Meat / Rosemary / Lemon</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Lemon-Rosemary Pork ........................ <span>$40.75</span></h4>
					<h5>Pork / Tooplate / Lemon</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Orange-Rosemary Salad .......................... <span>$55.00</span></h4>
					<h5>Salad / Rosemary / Orange</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Lemon-Rosemary Squid ...................... <span>$65.00</span></h4>
					<h5>Squid / Rosemary / Lemon</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Orange-Rosemary Shrimp ........................ <span>$70.50</span></h4>
					<h5>Shrimp / Rosemary / Orange</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Lemon-Rosemary Prawn ................... <span>$110.75</span></h4>
					<h5>Chicken / Rosemary / Lemon</h5>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Lemon-Rosemary Seafood ..................... <span>$220.50</span></h4>
					<h5>Seafood / Rosemary / Lemon</h5>
				</div>
			</div>
		</div>
	</section>


	<!-- team section -->
	<section id="team" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
					<h1 class="heading">Встречайте наши повара</h1>
					<hr>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
					<img src="images/team6.jpg" class="img-responsive center-block" alt="team img">
					<h4>Jhon</h4>
					<h3>Main Chef</h3>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<img src="images/team7.jpg" class="img-responsive center-block" alt="team img">
					<h4>Lynda</h4>
					<h3>Pizza Specialist</h3>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
					<img src="images/team5.jpg" class="img-responsive center-block" alt="team img">
					<h4>Alexander</h4>
					<h3>New Baker</h3>
				</div>
			</div>
		</div>
	</section>


	<!-- contact section -->
	<section id="contact" class="parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
					<h1 class="heading">Свяжитесь с нами</h1>
					<hr>

					<div class="content">
						Отправьте заявку на проведение мероприятия, и наши менеджеры подберут для вас оптимальные условия, помогут
						составить
						меню с учетом всех пожеланий и выделенного на эти цели бюджета.

						Скидки действуют для прямых заказчиков.
						<br /><br />
						Мы позаботимся о том, чтобы ваше торжество запомнилось надолго!
					</div>


				</div>
				<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
					@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
					<form action="{{ route('bookingSubmit')}}" method="POST">
						@csrf 
						<div class="col-md-6 col-sm-4">
					
							<input name="name" type="text" class="form-control"  id="name" placeholder="Имя	" value="{{ old('name') }}">
						</div>
						<div class="col-md-6 col-sm-4">
							<input name="phone" type="phone" class="form-control" id="phone" placeholder="Телефон">
						</div>
						<div class="col-md-4 col-sm-4">
							<input name="email" type="email" class="form-control" id="email" placeholder="Email">
						</div>
					
						<div class="col-md-4 col-sm-4">
							<input name="number" type="number" class="form-control" id="number" placeholder="Количество гостей">
						</div>
						<div class="col-md-4 col-sm-4">
							<input name="date" type="date" class="form-control" id="date" placeholder="Дата">
						</div>
						<div class="col-md-12 col-sm-12">
							<textarea name="message" rows="8" class="form-control" id="message" placeholder="Какое событие вы планируете отметить? Напишите ваши ожидания и пожелания."></textarea>
						</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
							<input name="submit" type="submit" class="form-control" id="submit" value="БРОНИРОВАНИЕ">
						</div>
					</form>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>


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