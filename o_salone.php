<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>O salóne - Matréshka Manikúra Pedikúra</title>
   <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io/android-chrome-192x192.png">
   <link rel="stylesheet" href="./Normalize/normalize-v8.0.1.css">
	<link rel="stylesheet" href="./css/all.min.css">
	<link rel="stylesheet" href="./css/header.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

   <header>

   <?php 

      $contact_phone = '+421 919 064 372';
      $facebook = 'https://www.facebook.com/salonmatreshka';
	   $instagram = 'https://www.instagram.com/viktoria_bochinche/';
      include 'navigation.php';
   
   ?>

      <div class="about_salon_header_bg">

         <div class="about_salon_header">

            <h2>Matréshka Manikúra Pedikúra</h2>
            <p>Salón Matréshka Manikúra Pedikúra vás víta v útulnom a príjemnom prostredí, v Banskej Bystrici v mestskej časti Fončorda. Teším sa na vašu návštevu. </p>
            
            <div class="buttons_about_salon">
               <a href="kontakt.php" class="order-button"><i class="fa-solid fa-circle-chevron-right"></i>OBJEDNAŤ SA</a>
               <a href="cennik.php" class="price_button"><i class="fa-solid fa-circle-chevron-right"></i>CENNÍK</a>
            </div>

         </div>

      </div>

   </header>

   <main>

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

      </section>

      <div class="about_owner">

         <img src="./images/Najkrajsia zena na svete.jpg" alt="fotka majitelky salona">

         <div class="about_owner_text">
            <p>„Salón začínal s jedným malým manikérskym stolíkom v roku 2010 a vďaka spokojnosti klientov sme časom vybudovali celý systém služieb v oblasti nechtového dizajnu, pedikúry a kozmetiky. Pravidelné vzdelávanie je u nás prvoradé, aby sme vedeli ponúkať prvotriednu kvalitu, ale stále s individuálnym prístupom ku klientovi.„</p>
            <h4>Viktória Ilchenko</h4>
            <p>Majiteľka, Matréshka Manikúra Pedikúra</p>
         </div>

      </div>

   </main>

   <?php 

      include 'array.php';
      include 'footer.php';
   
   ?>
   
</body>
</html>