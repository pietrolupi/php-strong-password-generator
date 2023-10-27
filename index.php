<?php
$password_array = [];
$generated_password = '';
$password_length = '';

$passwordComponents = [
  [
    'a',
    'b',
    'c',
    'd',
    'e'
  ],
  
  [
    'A',
    'B',
    'C',
    'D',
    'E'
  ],
  
  [
    '/',
    '?',
    '!',
    '%',
    '$'
  ],

  [
    '1',
    '2',
    '3',
    '4',
    '5',
  ]
  ];


if(isset($_POST['password'])){
  
  $password_length = $_POST['password'];

  if($password_length < 8 || $password_length > 32 || is_nan($password_length)){
    
    $generated_password = 'ATTENZIONE: inserire un NUMERO tra 8 e 32.';

  }else{

      $generated_password = $_POST['password'];
      
      for ($i = 0; $i < $password_length; $i++) {
        $n = count($passwordComponents);
    
        $password_array[] = $passwordComponents[rand(0, $n - 1)][rand(0, count($passwordComponents[$n - 1]) - 1)];
    }
    
    
      $generated_password = implode('', $password_array);


  };    

};


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
        <input type="text" name="password" class="form-control" id="password1" placeholder="Enter password">
        </div>

      </div>
      <div class="text-center mt-5 "><h1>La password generata è: <br> 
          <?php echo $generated_password ?> <br>
          <?php echo $password_length ?>
        </h1>
      </div>




    </form>

  </main>
</body>
</html>