<?php

function whoami(){
  $name = $_POST["name"];
  $age = $_POST["age"];
  
  if(isset($name) && isset($age)){
    echo "Hi, I have no name and I'm $age years old.\n";
  } else if(isset($name)){
    echo "Hi, my name is $name.\n";
  } else if(isset($age)){
    echo "Hi, I have no name and I'm $age years old.\n";
  } else {
    echo "Hi, I have no name.\n";
  }
}