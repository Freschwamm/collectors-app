<?php


$db = new PDO('mysql:host=db; dbname=pokemon-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



$query = $db->prepare('SELECT * FROM `pokemon-card`;');


$query->execute();

?>

<html>

 <div >
  <ul>
   <li>Home</li>
   <li>Add new</li>
  </ul>
 </div>
 <div>
  <img src="" alt="">
  <p>Name</p>
  <p>Cost</p>
 </div>
  <img src="" alt="">
  <p>Name</p>
  <p>Cost</p>
 <div>
  <img src="" alt="">
  <p>Name</p>
  <p>Cost</p>
 </div>
 <div>
   <img src="" alt="">
   <p>Name</p>
   <p>Cost</p>
 </div>

</html>