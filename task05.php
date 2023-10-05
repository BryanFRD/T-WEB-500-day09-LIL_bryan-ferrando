<?php

function form_is_submitted(){
  return isset($_POST["submit"]);
}

function whoami(){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $curriculum = $_POST["curriculum"];
  $ageValid = isset($age) && is_numeric($age);
  
  if(isset($name) && $ageValid && isset($curriculum)){
    echo "Hi, I have no name and I'm $age years old. I'm a student  $curriculum.";
  } else if(isset($name) && isset($curriculum)){
    echo "Hi, my name is $name. I'm a $curriculum student.";
  } else if($ageValid && isset($curriculum)){
    echo "Hi, I have no name and I'm $age years old. I'm a student of $curriculum.";
  } else if(isset($curriculum)){
    echo "Hi. I'm a $curriculum student.";
  } else if(isset($name) && $ageValid){
    echo "Hi, I have no name and I'm $age years old.";
  } else if(isset($name)){
    echo "Hi, my name is $name.";
  } else if($ageValid){
    echo "Hi, I have no name and I'm $age years old.";
  } else {
    echo "Hi.";
  }
}