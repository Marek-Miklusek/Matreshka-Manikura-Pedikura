<?php 

	include 'partials/array.php';
	$contact_phone = '+421 919 064 372';
	$facebook = 'https://www.facebook.com/salonmatreshka';
	$instagram = 'https://www.instagram.com/viktoria_bochinche/';
	$page_name = str_replace('-',' ',basename($_SERVER['SCRIPT_NAME'],'.php'));
	if ($page_name == 'index') $page_name = 'Matréshka Manikúra Pedikúra';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php if ($page_name == 'Matréshka Manikúra Pedikúra') echo $page_name; else echo $page_name.'/Matréshka Manikúra Pedikúra';?></title>
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon_io/android-chrome-192x192.png">
	<!-- neskor sa pozriet este na tu faviconu,velkost -->
	<link rel="stylesheet" href="./assets/Normalize/normalize-v8.0.1.css">
	<link rel="stylesheet" href="./assets/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/header.css">
	<link rel="stylesheet" href="./assets/css/main.css">
	<link rel="stylesheet" href="./assets/css/footer.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<!-- <script src="assets/js/jquery-2.1.1.min.js"></script> -->
	<!--[if lt IE 9]>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
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

					$new = array_splice($array,2,1);
					array_splice($array,4,0,$new);
					
					foreach ($array as $key => $file) {
						$page = str_replace('-',' ',basename($file,'.php'));

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