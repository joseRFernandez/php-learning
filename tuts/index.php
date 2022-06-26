<?php

$name= 'James';
$name2='jose'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Php Embedded Doc</title>
</head>
<body>

<?php

  $array_1 = ['Jose', 'Stefanie', 'James', 'Sadie'];
  ?>

  <?php
  foreach($array_1 as $name) { ?>
    <h1><?php echo $name ?></h1>
  <?php } ?>


</body>
</html>
