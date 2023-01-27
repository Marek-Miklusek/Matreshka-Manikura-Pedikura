<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Matréshka Manikúra Pedikúra</title>
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/android-chrome-192x192.png">
	<!-- neskor sa pozriet este na tu faviconu,velkost -->
	<link rel="stylesheet" href="./Normalize/normalize-v8.0.1.css">
	<link rel="stylesheet" href="./css/all.min.css">
	<link rel="stylesheet" href="./css/header.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>

	<?php

	include 'array.php';
	$contact_phone = '+421 919 064 372';
	$facebook = 'https://www.facebook.com/salonmatreshka';
	$instagram = 'https://www.instagram.com/viktoria_bochinche/';

	?>

	<header>

		<nav>

			<div class="tel-social-media">

				<div class="telephone">
					<i class="fa-solid fa-phone"></i>
					<p><?php echo "$contact_phone" ?></p>
				</div>

				<a href="<?php echo $facebook ?>" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
				<a href="<?php echo $instagram ?>" title="Instagram"><i class="fa-brands fa-instagram"></i></a>

			</div>

			<div class="main-navigation">

				<a href="">
					<img src="./images/logo1.jpg" class="logo" alt="logo">
				</a>

				<ul class="main-navigation-a">
					<li><a href="o_salone.php">O SALÓNE</a></li>
					<li class="price-list"><a href="cennik.php">CENNÍK</a></li>
					<li><a href="galeria.php">GALÉRIA</a></li>
					<li class="contact"><a href="kontakt.php">KONTAKT</a></li>
				</ul>

			</div>

		</nav>

		<div class="welcome">
			<div class="welcome-order-button">
				<h1>Perfektná starostlivosť o vaše ruky a nohy <br> v mojom salóne,teším sa na vašu návštevu!</h1>
				<a href="" class="order-button"><i class="fa-solid fa-circle-chevron-right"></i>OBJEDNAŤ SA</a>
			</div>
		</div>

	</header>

	<main>

		<section class="services">

			<?php foreach ( $services as $dude ) : ?>

				<div class="services_each">
					<img src="./images/logo2.jpg" alt="">
					<h2><?php echo $dude['name'] ?></h2>
					<p><?php echo $dude['description'] ?></p>
				</div>

			<?php endforeach ?>

		</section>

		<section class="why-me">

			<div class="why-me-h1-p">
				<h2>Prečo navštíviť práve môj salón</h2>
				<p><strong>Zabezpečím vám profesionálny </strong> a individuálny prístup.</p>
				<p>Veľký dôraz kladiem <strong> na kvalitu </strong>vykonaných služieb, pretože viem, že spokojní zákazníci sú mojou hlavnou vizitkou.</p>
				<p>- Pracujem s certifikovaným materiálom</p>
				<p>- na nechty <strong>top</strong> značky <strong>Luxio</strong>,<strong>Kinetics</strong>,<strong>Ruscona</strong></p>
				<p>- používam <strong>jednorazové </strong> <strong>dezinfikované</strong> nástroje</p>
				<p>- na pedikúru používam nemeckú kozmetiku Gehwol</p>
				<p>- <strong>vždy to najlepšie </strong> pre moje klienkty.</p>
			</div>

			<div class="container">

				<div class="heart">
					<p><i class="fa-regular fa-heart"></i></p>
					<p>Príjemné prostredie</p>
				</div>

				<div class="star">
					<p><i class="fa-regular fa-star"></i></p>
					<p>Značkový materiál</p>
				</div>

				<div class="quality">
					<p><i class="fa-regular fa-gem"></i></p>
					<p>Prvotriedna kvalita</p>
				</div>

				<div class="fashion">
					<p><i class="fa-regular fa-handshake"></i></p>
					<p>Vzájomná spokojnosť</p>
				</div>

			</div>

			<div class="box-order-button">
				<a href="" class="order-button"><i class="fa-solid fa-circle-chevron-right"></i>OBJEDNAŤ SA</a>
			</div>

		</section>

		<section class="matreshka-on-facebook">

			<h2>Matréshka Manikúra Pedikúra na Facebooku</h2>

			<!-- <div class="first-line"> -->

			<div class="container_second">

				<?php foreach ( $matreshka_on_facebook as $dude ) : ?>

					<a href="<?php echo $dude['image_href'] ?>">
						<img src="<?php echo $dude['image_src'] ?>" alt="">
					</a>

				<?php endforeach ?>

				<!-- <a href="https://www.facebook.com/salonmatreshka/photos/850529899687806"><img src="./gallery/302275049_850529896354473_7837993006769758969_n.jpg" alt="lak znacky kinetics"></a>
				<a href="https://www.facebook.com/salonmatreshka/photos/856718075735655"><img src="./gallery/305234763_856718065735656_3981884893071796739_n.jpg" alt="dva pohare sa strngaju"></a>
				<a href="https://www.facebook.com/salonmatreshka/photos/861503415257121"><img src="./gallery/307011782_861503395257123_3838845117708807307_n.jpg" alt="dve ruky sa dotykaju"></a>
				<a href="https://www.facebook.com/salonmatreshka/photos/848874496520013"><img src="./gallery/302287451_848874493186680_7940049762403309222_n.jpg" alt="nalakovane nechty na nohach na cierno"></a> -->
			

			<!-- <div class="second-line"> -->
				<!-- <a href="https://www.facebook.com/salonmatreshka/photos/598716968202435"><img src="./gallery/235974039_598716978202434_5567984271108480661_n.jpg" alt="nechty na nohach nalakovane na modro"></a>
				<a href="https://www.facebook.com/salonmatreshka/photos/917076779699784"><img src="./gallery/316295459_917076773033118_4695194740064293109_n.jpg" alt="nechty na rukach nalakovane na hnedo"></a>
				<a href="https://www.facebook.com/salonmatreshka/photos/913567856717343"><img src="./gallery/316522128_913567853384010_1776089485116392796_n.jpg" alt="necht nalakovany na strieborno"></a>
				<a href="https://www.facebook.com/salonmatreshka/photos/925849325489196"><img src="./gallery/317994649_925849318822530_3032589775131773924_n.jpg" alt="nechty na rukach nalakovane na cierno,so striebornym dizajnom"></a> -->

			</div>

			<a href="https://www.facebook.com/salonmatreshka" class="watch-me-fb"><i class="fa-brands fa-facebook"></i>Sledujte ma na Facebooku</a>

		</section>

	</main>

	<footer>

		<h2><i>Napísali o mne</i></h2>

		<div class="all-comments">

			<?php foreach ( $all_comments as $dude ) : ?>

				<div class="comments">

					<img src="<?php echo $dude['image'] ?>" alt="">

					<div class="five-stars">
						<i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i>
					</div>

					<h4><?php echo $dude['name'] ?></h4>
					<p><?php echo $dude['comment'] ?></p>

				</div>

			<?php endforeach ?>

		</div>

		<div class="last-footer">

			<p>&copy; 2023 | Marek Miklúšek |<a href="https://github.com/Marek-Miklusek"><i class="fa-brands fa-github"></i></a></p>

			<p>
				<a href="https://www.facebook.com/salonmatreshka" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
				<a href="https://www.instagram.com/viktoria_bochinche/" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
			</p>

		</div>

	</footer>

</body>
</html>