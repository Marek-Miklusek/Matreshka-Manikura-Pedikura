<?php 

   include 'partials/header.php';

?>

<div class="form container">

   <form class="form-group" action="partials/form.php" method="post">

      <p><input type="text" name="name" id="text" placeholder="Vaše meno"></p>
      <p><input type="text" name="email" id="text" placeholder="Váš email"></p>
      <p><textarea name="message" id="text" cols="30" rows="10" placeholder="Objednajte sa online"></textarea></p>
      <p><button class="btn btn-warning" type="submit">Odoslať email</button></p>
      
   </form>

</div>