<?php 

	include 'partials/header.php';

?>

<header>

	<div class="welcome">
		<div class="welcome-order-button">
			<h1>Perfektná starostlivosť o vaše ruky a nohy <br> v mojom salóne,teším sa na vašu návštevu!</h1>
			<?= order_button() ?>
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

		<?= order_button() ?>
		
		</div>

	</section>

	<section class="matreshka-on-facebook">

		<h2>Matréshka Manikúra Pedikúra na Facebooku</h2>

		<div class="container_second">

			<?php foreach ( $matreshka_on_facebook as $dude ) : ?>

				<a href="<?php echo $dude['image_href'] ?>">
					<img src="<?php echo $dude['image_src'] ?>">
				</a>

			<?php endforeach ?>

		</div>

		<a href="https://www.facebook.com/salonmatreshka" class="watch-me-fb"><i class="fa-brands fa-facebook"></i>Sledujte ma na Facebooku</a>

	</section>

</main>

<?php 

	include 'partials/footer.php';

?>

