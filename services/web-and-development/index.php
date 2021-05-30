<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
  require_once(Config::getRootDir() . '/libs/header.php');
?>
    <main>
      <section class="header">
        <div class="page">
          <h1>Web &amp; Development</h1>
        </div>
        <nav>
          <div class="page">
            <ul>
              <li>
                <a href="#">Link 1</a>
              </li>
              <li>
                <a href="#">Link 2</a>
              </li>
              <li>
                <a href="#">Reseller</a>
              </li>
            </ul>
          </div>
        </nav>
      </section>
      <section>
        <div class="page">
          <h2>Formules</h2>
          <p class="eyecatcher">Webhosting op maat.
          </p>
          <article class="formulas">
            <div class="formulas-item">
              <div class="pricing">
                <h3>Starter</h3>
                <h4><span>&euro;</span>1.95<span>excl. btw</span></h4>
                <p>/ maand</p>
              </div>
              <a class="subscribe" href="#">
                <span>Inschrijven</span>
              </a>
              <ul class="summary">
                <li>
                  1 <span>Website</span>
                </li>
                <li>
                  1GB SSD <span>Opslagruimte</span>
                </li>
                <li>
                  10GB <span>Bandbreedte</span>
                </li>
                <li>
                  SSL <span>Self-service</span>
                </li>
              </ul>
            </div>
            <div class="formulas-item">
              <div class="pricing">
                <h3>Value</h3>
                <h4><span>&euro;</span>100<span>excl. btw</span></h4>
                <p>/ jaar</p>
              </div>
              <a class="subscribe" href="#">
                <span>Inschrijven</span>
              </a>
              <ul class="summary">
                <li>
                  1 <span>Domein</span>
                </li>
                <li>
                  1 <span>Website</span>
                </li>
                <li>
                  1GB <span>Opslagruimte</span>
                </li>
                <li>
                  50GB <span>Exchange mailbox</span>
                </li>
                <li>
                  SSL <span>Support</span>
                </li>
                <li>
                  1-click <span>Wordpress</span>
                </li>
              </ul>
            </div>
            <div class="formulas-item">
              <div class="pricing">
                <h3>Professional</h3>
                <h4><span>&euro;</span>25<span>excl. btw</span></h4>
                <p>/ maand</p>
              </div>
              <a class="subscribe" href="#">
                <span>Inschrijven</span>
              </a>
              <ul class="summary">
                <li>
                  1 <span>Domein</span>
                </li>
                <li>
                  10GB <span>Opslagruimte</span>
                </li>
                <li>
                  50GB <span>Bandbreedte</span>
                </li>
                <li>
                  <span>Aan te vullen</span>
                </li>
              </ul>
            </div>
            <div class="formulas-item">
              <div class="pricing">
                <h3>Advanced</h3>
                <h4><span>&euro;</span>100<span>excl. btw</span></h4>
                <p>/ maand</p>
              </div>
              <a class="subscribe" href="#">
                <span>Inschrijven</span>
              </a>
              <ul class="summary">
                <li>
                  10 <span>Websites</span>
                </li>
                <li>
                  50GB <span>Opslagruimte</span>
                </li>
                <li>
                  500GB <span>Bandbreedte</span>
                </li>
                <li>
                  <span>Aan te vullen</span>
                </li>
              </ul>
            </div>
          </article>
        </div>
      </section>
      <section>
        <div class="page">
          <h2>Partners</h2>
        </div>
      </section>
<?php require_once(Config::getRootDir() . '/libs/corevalues.php'); ?>
    </main>
<?php require_once(Config::getRootDir() . '/libs/footer.php'); ?>