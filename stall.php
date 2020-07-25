<?php
/* Define particular data */
$page['body'] = basename($_SERVER['PHP_SELF'], ".php");
$page['lang'] = 'fr';

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
        <?php
        if ($page['lang'] != $site['lang']) {
          include 'layout/reusable/div-alert-language.php';
        }
        /* Search for files matching the defined path */
        $path = 'speech/' . $page['lang'] . '/';
        $mark = 1;
        foreach (glob($path . $page['body'] . '-' . $page['type'] . '*.md') as $part[$mark]) {
          echo mrg_text_full($part[$mark], $page['lang']);
          $mark++;
        }
        unset($mark, $part, $path);
        ?>
      </article>
    </main>
    <?php require_once 'layout/footer.php'; ?>
  </div>
  <?php require_once 'layout/reusable/body-background.php'; ?>
</body>

</html>
