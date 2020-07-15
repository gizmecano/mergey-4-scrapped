<?php
/* Define particular data */
$page['body'] = basename($_SERVER['PHP_SELF'], ".php");

/* Include main requirements */
require_once 'layout/required/site-data.php';
require_once 'layout/required/page-data.php';
?>

<!doctype html>
<html lang="<?php echo $page['lang']; ?>">
<?php require_once 'layout/head.php'; ?>

<body id="<?php echo $page['body']; ?>">
  <div class="flex-container">
    <?php require_once 'layout/header.php'; ?>

  </div>
</body>

</html>
