<?php

function form_is_submitted(){
  return isset($_POST["submit"]);
}

function whoami(){
  $name = empty($_POST["name"]) ? null : $_POST["name"];
  $age = empty($_POST["age"]) ? null : $_POST["age"];
  $curriculum = empty($_POST["curriculum"]) ? null : $_POST["curriculum"];
  $ageValid = isset($age) && is_numeric($age);
  
  if(isset($name) && $ageValid && isset($curriculum)){
    echo "Hi, I have no name and I'm $age years old. I'm a student of $curriculum.";
  } else if(isset($name) && isset($curriculum)){
    echo "Hi, my name is $name. I'm a student of $curriculum.";
  } else if($ageValid && isset($curriculum)){
    echo "Hi, I have no name and I'm $age years old. I'm a student of $curriculum.";
  } else if(isset($curriculum)){
    echo "Hi. I'm a student of $curriculum.";
  } else if(isset($name) && $ageValid){
    echo "Hi, my name is $name and I'm $age years old.";
  } else if(isset($name)){
    echo "Hi, my name is $name.";
  } else if($ageValid){
    echo "Hi, I have no name and I'm $age years old.";
  } else {
    echo "Hi.";
  }
}