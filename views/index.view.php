<?php require "partials/head.php";?>


    <?php foreach ($tasks as $task): ?>
      <ul>
        <?php if ($task->completed): ?>
          <li>
            <s>
              <?=$task->description?>
            </s>
          </li>
        <?php else: ?>
          <li>
            <?=$task->description?>
          </li>
        <?php endif;?>
      </ul>
    <?php endforeach;?>

<?php require "partials/footer.php";?>
