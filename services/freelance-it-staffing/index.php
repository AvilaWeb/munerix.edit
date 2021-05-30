<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
  require_once(Config::getRootDir() . '/libs/header.php');
?>
    <main>
      <section class="header">
        <div class="page">
          <h1>IT Staffing</h1>
        </div>
      </section>
      <section>
        <div class="page">
          <p class="eyecatcher"></p>
        </div>
      </section>
<?php require_once(Config::getRootDir() . '/libs/corevalues.php'); ?>
    </main>
<?php require_once(Config::getRootDir() . '/libs/footer.php'); ?>