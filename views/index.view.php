<?php require "partials/head.php";?>

  <h1> Submit your Name </h1>

  <form method="POST" action="/names">
    <input name="name"></input>
    <input type="submit"></input>
  </form>

  <?php foreach ($users as $user): ?>
    <ul>
      <li>
        <?=$user->name?>
      </li>
    </ul>
  <?php endforeach;?>

<?php require "partials/footer.php";?>
