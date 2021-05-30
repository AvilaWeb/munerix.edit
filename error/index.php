<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
  require_once(Config::getRootDir() . '/libs/header.php');
  isset($_GET['err']) ? $error = cleanup($_GET['err']) : $error = "404";
?>
    <main>
      <section>
        <div class="page">
          <h1 id="error"><?php echo $error; ?></h1>
          <iframe loading="lazy" id="notfound" src="https://notfound-static.fwebservices.be/nl-BE/404?key=5f24a0b1c9969" scrolling="no"></iframe>
        </div>
      </section>
    </main>
<?php require_once(Config::getRootDir() . '/libs/footer.php'); ?>