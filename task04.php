<?php

function whoami(){
  $name = empty($_POST["name"]) ? null : $_POST["name"];
  $age = empty($_POST["age"]) ? null : $_POST["age"];
  $validAge = isset($age) && is_numeric($age);
  if(isset($name) && $validAge){
    echo "Hi, my name is $name and I'm $age years old.";
  } else if(isset($name)){
    echo "Hi, my name is $name.";
  } else if($validAge){
    echo "Hi, I have no name and I'm $age years old.";
  } else {
    echo "Hi, I have no name.";
  }
}