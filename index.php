<?php
/* Define particular data */
$page['body'] = basename($_SERVER['PHP_SELF'], ".php");

/* Include main requirements */
require_once 'layout/required/site-data.php';
require_once 'layout/required/page-data.php';

/* Define specific path for content */
$page['path'] = 'speech/' . $page['lang'] . '/' . $page['body'];
?>

<!doctype html>
<html lang="<?php echo $page['lang']; ?>">
<?php require_once 'layout/head.php'; ?>

<body id="<?php echo $page['body']; ?>">
  <div class="flex-container">
    <?php require_once 'layout/header.php'; ?>
    <main id="main" class="w75 small-w100 tiny-w100 man pal">
      <article class="w100 small-w100 tiny-w100 fr">
        <header class="w100 small-w100 tiny-w100">
          <h2 class="visually-hidden"><?php echo ucfirst($glossary['page']['index']['hidden']); ?></h2>
          <?php echo mrg_text_full($page['path'] . '-motto.md', $page['lang']); ?>
          <div class="w50 small-w100 tiny-w100">
            <img class="w100 small-w100 tiny-w100 center" src="<?php echo $meta['image']; ?>" alt="<?php echo $meta['blurb']; ?>">
          </div>
          <?php echo mrg_text_full($page['path'] . '-axiom.md', $page['lang']);
          ?>
        </header>
      </article>
    </main>
    <?php require_once 'layout/footer.php'; ?>
  </div>
  <?php require_once 'layout/reusable/body-background.php'; ?>

</body>

</html>

<?php unset($page); ?>
