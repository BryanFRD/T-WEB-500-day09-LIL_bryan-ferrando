<?php

function whoami(){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $validAge = isset($age) && is_numeric($age);
  if(isset($name) && $validAge){
    echo "Hi, I have no name and I'm $age years old.";
  } else if(isset($name)){
    echo "Hi, my name is $name.";
  } else if($validAge){
    echo "Hi, I have no name and I'm $age years old.";
  } else {
    echo "Hi, I have no name";
  }
}