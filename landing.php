<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing</title>
</head>
<body>
  <h1>LA TUA PASSWORD è : <?php echo $_SESSION['generatedPassword'] ?> </h1>
</body>
</html>