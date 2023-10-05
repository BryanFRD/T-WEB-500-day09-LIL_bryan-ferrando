<?php

function whoami(){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $validAge = isset($age) && is_numeric($age);
  if(isset($name) && $validAge){
    echo "Hi, I have no name and I'm $age years old.\n";
  } else if(isset($name)){
    echo "Hi, my name is $name.\n";
  } else if($validAge){
    echo "Hi, I have no name and I'm $age years old.\n";
  } else {
    echo "Hi.\n";
  }
}