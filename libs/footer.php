    <footer>
      <div class="page">
        <svg class="footer-logo">
          <path d="M13.28,18.91l-5.37-7.98H1.58l8.14,12.32C10.71,21.91,11.88,20.48,13.28,18.91z"/>
          <path d="M16.77,25.61c-0.77,1.17-1.68,2.7-2.62,4.33L20.79,40h6.67L17.27,24.85C17.1,25.1,16.93,25.35,16.77,25.61z"/>
          <path class="x-red" d="M41.3,0c0,0-13.84,7.07-20.65,13.7c-4.25,4.14-7.72,7.86-10.08,11.22S0,40,0,40h6.73c0,0,5.51-10.52,8.64-15.3C22.4,13.97,32.98,4.78,41.3,0z"/>
        </svg>
        <section class="footer-info">
          <h2><?php echo Config::getCompany(); ?></h2>
          <address>
            <p><?php echo Config::getSeatAddress(); ?></p>
            <p><?php echo Config::getSeatZipCity(); ?></p>
            <p>btw <?php echo Config::getVATNumber(); ?></p>
            <p>RPR Gent, afdeling Kortrijk</p>
          </address>
        </section>
        <section class="footer-nav">
          <h2>Diensten</h2>
          <nav>
            <ul>
              <li>
                <a href="<?php echo Config::getRoot(); ?>/services/managed-services">Managed&nbsp;services</a>
              </li>
              <li>
                <a href="<?php echo Config::getRoot(); ?>/services/freelance-it-staffing">Freelance&nbsp;IT&nbsp;staffing</a>
              </li>
              <li>
                <a href="<?php echo Config::getRoot(); ?>/services/project-management">Project&nbsp;management</a>
              </li>
            </ul>
            <ul>
              <li>
                <a href="<?php echo Config::getRoot(); ?>/services/it-infrastructure">IT&nbsp;infrastructure</a>
              </li>
              <li>
                <a href="<?php echo Config::getRoot(); ?>/services/web-and-development">Web&nbsp;&amp;&nbsp;Development</a>
              </li>
              <li>
                <a href="<?php echo Config::getRoot(); ?>/services/software-and-licenses">Software&nbsp;&amp;&nbsp;Licenses</a>
              </li>
            </ul>
          </nav>
        </section>
        <nav class="footer-legal">
          <ul>
            <li>
              <a href="<?php echo Config::getRoot(); ?>/legal/privacy-policy">Privacyverklaring</a>
            </li>
            <li>
              <a href="<?php echo Config::getRoot(); ?>/legal/cookie-policy">Cookieverklaring</a>
            </li>
            <li>
              <a href="<?php echo Config::getRoot(); ?>/legal/terms-and-conditions">Algemene voorwaarden</a>
            </li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>