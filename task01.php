<?php

function display_menu(){
  return <<<HTML
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contact.php">Ccontact</a></li>
    </ul>
  HTML;
}