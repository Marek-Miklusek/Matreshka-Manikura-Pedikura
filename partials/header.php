<?php 

	include 'partials/array.php';
	$contact_phone = '+421 919 064 372';
	$facebook = 'https://www.facebook.com/salonmatreshka';
	$instagram = 'https://www.instagram.com/viktoria_bochinche/';
	$page_name = basename($_SERVER['SCRIPT_NAME'],'.php');
	if ($page_name == 'index') $page_name = 'Matréshka Manikúra Pedikúra';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $page_name?></title>
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/android-chrome-192x192.png">
	<!-- neskor sa pozriet este na tu faviconu,velkost -->
	<link rel="stylesheet" href="./assets/Normalize/normalize-v8.0.1.css">
	<link rel="stylesheet" href="./assets/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/header.css">
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="stylesheet" href="./assets/css/footer.css">
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

	<nav>

		<div class="tel-social-media">

			<div class="telephone">
				<i class="fa-solid fa-phone"></i>
				<p><?php echo $contact_phone ?></p>
			</div>

			<a href="<?php echo $facebook ?>" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
			<a href="<?php echo $instagram ?>" title="Instagram"><i class="fa-brands fa-instagram"></i></a>

		</div>

		<div class="main-navigation">

			<a href="index.php">
				<img src="./assets/images/logo1.jpg" class="logo" alt="logo">
			</a>

			<ul class="main-navigation-a">

				<?php

					$array = glob('*.php');
					$array = array_reverse($array);

					foreach ($array as $file) {

						$page = basename($file,'.php');

						if ($page_name == 'Matréshka Manikúra Pedikúra') $page_name = 'Domov';
						if ($page == 'index') $page = 'Domov';

						if ($page_name == $page) {
							echo '<li><strong class="'.kontakt_bg($file).'">'.$page.'</strong></li>';
						}
						else {
							echo '<li><a href="'.$file.'" class="'.kontakt_bg($file).'">'.$page.'</a></li>';
						}
					}

				?>

			</ul>

		</div>

	</nav>