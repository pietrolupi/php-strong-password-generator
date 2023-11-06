<?php


require_once __DIR__ . '/data/functions.php';

$password_array = [];
$password_length = '';
$generated_password = '';

$passwordComponents = 'abcdefghijklmnopqABCDEFGHILMNOPREQICEQALCAZVNVEFJENCPZrstuvwxyz1234567890!_?+-$%ì\£=><W';



if (isset($_POST['password'])) {
  
  
  $password_length = intval($_POST['password']);

  session_start();
    
  $_SESSION['generatedPassword'] =  getRandomPassword($password_length, $passwordComponents); ;
  
  header('Location: landing.php');    


  }


?>



<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/partials/head.php' ?>

<body>
  <header>
    <div class="container text-center mt-5">
      
      <h1>Strong Password Generator</h1>
      
      <h2>Genera una password sicura</h2>
      <div><p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p></div>
    </div>
  </header>

  <main>

    <form action="" method="POST">

      <div class="container d-flex ">
  
        <div class="d-flex flex-column justify-content-between">
          <p>Lunghezza password</p>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div>
        <input type="number" name="password" class="form-control" id="password1" placeholder="Enter password">
        </div>

      </div>
      
        
      </div>




    </form>

  </main>
</body>
</html>