<?php


function getRandomPassword($password_length, $passwordComponents){

    $password_array = [];
    $generated_password = '';
    
  
    if($password_length < 8 || $password_length > 32 || is_nan($password_length)){
      
      $generated_password = 'ATTENZIONE: inserire un NUMERO tra 8 e 32.';
  
    }else{
        
        for ($i = 0; $i < $password_length; $i++) {
          $n = strlen($passwordComponents);
      
          $password_array[] = $passwordComponents[rand(0, $n - 1)];
      }
      
      
        $generated_password = implode('', $password_array);
  
  
    };   

    return  $generated_password;
  
}
