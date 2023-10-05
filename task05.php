<?php

function form_is_submitted(){
  return isset($_POST["submit"]);
}

function whoami(){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $curriculum = $_POST["curriculum"];
  
  
}