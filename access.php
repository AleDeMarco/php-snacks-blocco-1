<?php
  $userData = [
    'ok' => 'Acesso consentito',
    'ko' => 'Acesso negato'
  ];
  if (strlen($_GET['name']) > 3) {
    $userData['name'] = $_GET['name'];
  }
  if (strpos($_GET['mail'], '.') && strpos($_GET['mail'], '@')) {
    $userData['mail'] = $_GET['mail'];
  }
  if (is_numeric($_GET['age'])) {
    $userData['age'] = $_GET['age'];
  }
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Validator</title>
</head>
<body>
 <p>
   <?php
    if (count($userData) == 5) {
      echo $userData["ok"];
    }
    else {
      echo $userData["ko"];
    }
   ?>
 </p>
</body>
</html>
