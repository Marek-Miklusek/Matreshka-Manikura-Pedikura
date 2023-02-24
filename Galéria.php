<?php 

   include 'partials/header.php';

?>

<header class="gallery">

   <div class="gallery_show_nails">
      <h1>Ukážka mojej práce</h1>
      <p>Nechty</p>
   </div>

   <div class="gallery_image_second">

      <?php 
      
         foreach (glob('assets/gallery_gallery/*') as $image) {
            echo '<a href="'.$image.'"><img src="'.$image.'"></a>';
         }
      
      ?>

   </div>

</header>

<?php 

   include 'partials/footer.php';

?>


