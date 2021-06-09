<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

  </head>
  <body>
    <?php foreach ($person as $key => $feature): ?>

      <li>
        <strong><?=ucwords($key)?></strong> <?=$feature?>
      </li>

    <?php endforeach;?>

    <li>
      <strong>Status: </strong>
      <?php if ($person['single']): ?>
        <span class="icon">&#9989;</span>
      <?php else: ?>
        <span class="icon">&#10006;</span>
      <?php endif;?>
    </li>


  </body>
</html>
