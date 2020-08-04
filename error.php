<?php
/* Define particular data */
$page['body'] = basename($_SERVER['PHP_SELF'], ".php");

/* Collect definite data */
$page['type'] = $_GET['file'];

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
    <main id="main" class="w75 small-w100 tiny-w100 man pal">
      <article class="w100 small-w100 tiny-w100 fr">
        <h2><?php echo $page['name']; ?></h2>
        <div role="alert">
          <?php
          $path = 'speech/' . $page['lang'] . '/error-' . $page['type'] . '.md';
          echo mrg_text_full($path, $page['lang']);
          ?>
        </div>
      </article>
    </main>
    <?php require_once 'layout/footer.php'; ?>
  </div>
  <?php require_once 'layout/reusable/body-background.php'; ?>

</body>

</html>

<?php unset($page, $path); ?>
