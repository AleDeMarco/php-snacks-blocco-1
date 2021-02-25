<?php
  $results = [
    [
      'locali' => 'Rossi',
      'ospiti' => 'Blu',
      'puntiLocali' => 38,
      'puntiOspiti' => 34
    ],
    [
      'locali' => 'Gialli',
      'ospiti' => 'Rosa',
      'puntiLocali' => 23,
      'puntiOspiti' => 78
    ],
    [
      'locali' => 'Verdi',
      'ospiti' => 'Bianchi',
      'puntiLocali' => 63,
      'puntiOspiti' => 76
    ],
    [
      'locali' => 'Marroni',
      'ospiti' => 'Arancioni',
      'puntiLocali' => 53,
      'puntiOspiti' => 23
    ],
  ];
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
  <?php
    for ($i=0; $i < count($results); $i++) {
      $loc = $results[$i]['locali'];
      $osp = $results[$i]['ospiti'];
      $ploc = $results[$i]['puntiLocali'];
      $posp = $results[$i]['puntiOspiti'];
  ?>
  <p>
    <?php echo $loc; ?> &minus; <?php echo $osp; ?> &vert; <?php echo $ploc; ?> &minus; <?php echo $posp; ?>
  </p>
  <?php
    }
  ?>
</body>
</html>
