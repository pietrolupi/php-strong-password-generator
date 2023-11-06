<?php


function getRandomPassword($password_length, $passwordComponents){
  $password_array = [];
  $generated_password = '';
  for ($i = 0; $i < $password_length; $i++) {
    $n = strlen($passwordComponents);
    $password_array[] = $passwordComponents[rand(0, $n - 1)];
  }
  return implode('', $password_array);
}