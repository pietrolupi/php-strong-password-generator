<?php
session_start();


$password = $_SESSION['generatedPassword'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing</title>
</head>
<body>
  <h1>LA TUA PASSWORD è: <?php echo $password ?> </h1>
</body>
</html>