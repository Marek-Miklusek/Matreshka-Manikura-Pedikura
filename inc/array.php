<?php 

$all_comments = [

   [
      'name' => 'Dominika Hraškova',
      'comment' => '"Už niekoľko krát som absolvovala hĺbkové čistenie a mikrodermabráziu a môžem povedať, že už po jednom dni vidno výsledok. Zápal v oblasti tváre sa po jednom dni stiahne, pleť sa zjedností a po niekoľkych dňoch zapálené vyrážky zmiznú. Som veľmi spokojná. Ďakujem."',
      'image' => './assets/images/311672128_895693868504742_6488029264432664561_n small.jpg',
   ],

   [
      'name' => 'Dominika Hraškova',
      'comment' => '"Už niekoľko krát som absolvovala hĺbkové čistenie a mikrodermabráziu a môžem povedať, že už po jednom dni vidno výsledok. Zápal v oblasti tváre sa po jednom dni stiahne, pleť sa zjedností a po niekoľkych dňoch zapálené vyrážky zmiznú. Som veľmi spokojná. Ďakujem."',
      'image' => './assets/images/311672128_895693868504742_6488029264432664561_n small.jpg',
   ],

   [
      'name' => 'Dominika Hraškova',
      'comment' => '"Už niekoľko krát som absolvovala hĺbkové čistenie a mikrodermabráziu a môžem povedať, že už po jednom dni vidno výsledok. Zápal v oblasti tváre sa po jednom dni stiahne, pleť sa zjedností a po niekoľkych dňoch zapálené vyrážky zmiznú. Som veľmi spokojná. Ďakujem."',
      'image' => './assets/images/311672128_895693868504742_6488029264432664561_n small.jpg',
   ],

   [
      'name' => 'Dominika Hraškova',
      'comment' => '"Už niekoľko krát som absolvovala hĺbkové čistenie a mikrodermabráziu a môžem povedať, že už po jednom dni vidno výsledok. Zápal v oblasti tváre sa po jednom dni stiahne, pleť sa zjedností a po niekoľkych dňoch zapálené vyrážky zmiznú. Som veľmi spokojná. Ďakujem."',
      'image' => './assets/images/311672128_895693868504742_6488029264432664561_n small.jpg',
   ],

   [
      'name' => 'Dominika Hraškova',
      'comment' => '"Už niekoľko krát som absolvovala hĺbkové čistenie a mikrodermabráziu a môžem povedať, že už po jednom dni vidno výsledok. Zápal v oblasti tváre sa po jednom dni stiahne, pleť sa zjedností a po niekoľkych dňoch zapálené vyrážky zmiznú. Som veľmi spokojná. Ďakujem."',
      'image' => './assets/images/311672128_895693868504742_6488029264432664561_n small.jpg',
   ],

   [
      'name' => 'Dominika Hraškova',
      'comment' => '"Už niekoľko krát som absolvovala hĺbkové čistenie a mikrodermabráziu a môžem povedať, že už po jednom dni vidno výsledok. Zápal v oblasti tváre sa po jednom dni stiahne, pleť sa zjedností a po niekoľkych dňoch zapálené vyrážky zmiznú. Som veľmi spokojná. Ďakujem."',
      'image' => './assets/images/311672128_895693868504742_6488029264432664561_n small.jpg',
   ],

];

$services = [

   [
      'name' => 'Manikúra',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempore beatae quisquam dolore earum quae, cupiditate exercitationem quas sequi .'
   ],

   [
      'name' => 'Pedikúra',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempore beatae quisquam dolore earum quae, cupiditate exercitationem quas sequi .'
   ],

   [
      'name' => 'Parafínoterapia',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempore beatae quisquam dolore earum quae, cupiditate exercitationem quas sequi .'
   ],

   [
      'name' => 'Design nechtov',
      'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempore beatae quisquam dolore earum quae, cupiditate exercitationem quas sequi .'
   ],

];


// FUNCTIONS

function order_button () {
   echo "<a href=\"kontakt.php\" class=\"order-button\"><i class=\"fa-solid fa-circle-chevron-right\"></i>OBJEDNAŤ SA</a>";
}

function contact_bg ($file) {
   if ( $file == 'kontakt.php') {
      return 'contact';
   }
}

?>