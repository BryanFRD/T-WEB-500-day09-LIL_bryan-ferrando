<?php

function form_is_submitted(){
  return isset($_POST["submit"]);
}

function whoami(){
  $name = empty($_POST["name"]) ? null : $_POST["name"];
  $age = empty($_POST["age"]) ? null : $_POST["age"];
  $curriculum = empty($_POST["curriculum"]) ? null : $_POST["curriculum"];
  $ageValid = isset($age) && is_numeric($age);
  
  if(isset($name) && $ageValid){
    $test = "Hi, my name is $name and I'm $age years old.";
  } else if(isset($name)){
    $test = "Hi, my name is $name.";
  } else if($ageValid){
    $test = "Hi, I have no name and I'm $age years old.";
  } else {
    $test = "Hi, I have no name.";
  }
  
  if(isset($curriculum)){
    $test .= " I'm a student of $curriculum.";
  }
  
  echo $test;
}