
<?php
error_reporting(-1);
ini_set('display_errors', true);

$rows = empty($_POST['rows']) ? 0 : (int)$_POST['rows'] ;
?>
<html>
  <head>
    <title>Demo</title>
  </head>
  <body>
    <form action="#" method="post">
      <div>
        <p>
          Number of people to add?
        </p>
        <input type="text" name="rows" />
      </div>
      <?php if(0 !== $rows): ?>
        <?php foreach(range(1, $rows) as $row): ?>
          <div>
            <p>Person <?php echo $row; ?></p>
            <input type="text" name="people[<?php echo $row; ?>][forename]" />
            <input type="text" name="people[<?php echo $row; ?>][surname]" />
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <input type="submit" value="Add" />
    </form>
  </body>
</html>
<?php include('footer.php'); ?>
</div>

<!---->

<?php
error_reporting(-1);
ini_set('display_errors', true);

$rows = empty($_POST['rows']) ? 0 : (int)$_POST['rows'] ;
?>
<html>
  <head>
    <title>Demo</title>
  </head>
  <body>
    <form action="#" method="post">
      <div>
        <p>
          Number of people to add?
        </p>
        <input type="text" name="rows" />
      </div>
      <?php if(0 !== $rows): ?>
        <?php foreach(range(1, $rows) as $row): ?>
          <div>
            <p>Person <?php echo $row; ?></p>
            <input type="text" name="people[<?php echo $row; ?>][forename]" />
            <input type="text" name="people[<?php echo $row; ?>][surname]" />
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
      <input type="submit" value="Add" />
    </form>
  </body>
</html>