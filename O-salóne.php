<?php include 'partials/header.php' ?>

<header>

   <div class="about_salon_header_bg">

      <div class="about_salon_header">

         <h2>Matréshka Manikúra Pedikúra</h2>
         <p>Salón Matréshka Manikúra Pedikúra vás víta v útulnom a príjemnom prostredí, v Banskej Bystrici v mestskej časti Fončorda. Teším sa na vašu návštevu. </p>
         
         <div class="buttons_about_salon">
            <?= order_button() ?>
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

      <?php include 'partials/satisfaction-with-quality.php' ?>

   </section>

   <div class="about_owner">

      <img src="./assets/images/Najkrajsia zena na svete.jpg" alt="fotka majitelky salona">

      <div class="about_owner_text">
         <p>„Salón začínal s jedným malým manikérskym stolíkom v roku 2010 a vďaka spokojnosti klientov sme časom vybudovali celý systém služieb v oblasti nechtového dizajnu, pedikúry a kozmetiky. Pravidelné vzdelávanie je u nás prvoradé, aby sme vedeli ponúkať prvotriednu kvalitu, ale stále s individuálnym prístupom ku klientovi.„</p>
         <h4>Viktória Ilchenko</h4>
         <p>Majiteľka, Matréshka Manikúra Pedikúra</p>
      </div>

   </div>

</main>

<?php include 'partials/footer.php' ?>
