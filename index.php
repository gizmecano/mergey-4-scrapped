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
    <main id="main" class="w75 small-w100 tiny-w100 man pal">
      <article class="w100 small-w100 tiny-w100 fr">
        <!-- Main content of the page -->
        <h2>Title of the article</h2>
        <p>Paragraph of content.</p>
      </article>
    </main>
    <?php require_once 'layout/footer.php'; ?>
  </div>
  <?php require_once 'layout/reusable/body-background.php'; ?>

</body>

</html>
