<?php



require_once __DIR__ . '/data/functions.php';

$password_array = [];
$generated_password = '';
$password_length = '';

$passwordComponents = 'abcdefghijklmnopqABCDEFGHILMNOPREQICEQALCAZVNVEFJENCPZrstuvwxyz1234567890!_?+-$%ì\£=><W';

if(isset($_POST['password'])){

    $password_length = $_POST['password'];
  
    getRandomPassword($password_length, $passwordComponents);

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

    <form action="landing.php" method="POST">

      <div class="container d-flex ">
  
        <div class="d-flex flex-column justify-content-between">
          <p>Lunghezza password</p>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        <div>
        <input type="text" name="password" class="form-control" id="password1" placeholder="Enter password">
        </div>

      </div>
      <div class="text-center mt-5 "><h1>La password generata è: <br> 
          <?php echo getRandomPassword($password_length, $passwordComponents) ?> <br>
          <?php echo $password_length ?>
        </h1>
      </div>




    </form>

  </main>
</body>
</html>