<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');
  require_once(Config::getRootDir() . '/libs/header.php');
?>
    <div class="intro-container">
      <div class="intro-curtain">
      </div>
    </div>
    <main>
      <div class="anchor" id="home"></div>
      <section id="hero">
        <div class="page">
          <div class="hero-catchphrase">
            <h1>Laat je bijstaan wanneer het onmogelijk lijkt</h1>
            <p>Van bedrijfsanalyse tot projectoplevering denken wij mee aan uw toekomst en realiseren wij toegevoegde waarde met impact</p>
          </div>
        </div>
        <div class="hero-container">
          <div class="hero-image"></div>
        </div>
        <div class="skewhero-mask">
          <div class="skewhero-parallax">
            <div class="skewhero-image"></div>
          </div>
        </div>
        <a class="chevron-container" onclick="anchorScroll(this)" href="#about" tabindex="-1">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
        </a>
      </section>
      <div class="anchor" id="about"></div>
      <section>
        <div class="page">
          <h2>Wie wij zijn</h2>
          <p class="eyecatcher">
            Wij zijn gepassioneerde, toegewijde en zeer gedreven IT&nbsp;consultants met een sterke focus op het verbeteren van bedrijfsprocessen.
          </p>
          <article class="grid">
            <p>De ontwikkelingen op technologisch gebied doen u nadenken over hoe u uw producten en diensten aanbiedt. U wil tijdrovende bedrijfs&shy;processen automatiseren en stroomlijnen om uw workflow en communicatie efficiënter te maken. De digitale transformatie is een fundamentele verandering waardoor u voor zowel uw bedrijf als voor uw klanten waarde toevoegt. Hoe kunt u de correcte stappen nemen om uw doelstellingen als bedrijf te halen?</p>
            <p><?php echo Config::getCompany(); ?> denkt met u mee over de toekomst van uw onderneming. Door het centraliseren van uw bedrijfsprocessen is het mogelijk om waardevolle inzichten te bekomen. Zo maakt u goed-geïnformeerde beslissingen. Het is ons doel om naar oplossingen te zoeken die veel verder reiken dan enkel uw IT-omgeving. U hebt alvast de garantie dat we al onze vaardigheden en sterktes investeren in onze diensten en ondersteuning.</p>
          </article>
        </div>
      </section>
      <div class="anchor" id="services"></div>
      <section>
        <div class="page">
          <h2>Onze diensten</h2>
          <p class="eyecatcher">U kan <?php echo Config::getCompany(); ?> het beheer, ondersteuning en opvolging van uw IT of projecten toevertrouwen. Dankzij onze expertise kan u zich blijven focussen op uw eigen kernactiviteiten.</p>
          <nav class="card-grid">
            <a class="card" href="<?php echo Config::getRoot(); ?>/services/managed-services">
              <h3>Managed services</h3>
              <p>Wij stoppen niet zomaar bij het beheren, beveiligen en proactief onderhouden van de IT-infrastructuur. Van ons krijg je strategisch en technologisch advies dat beantwoordt aan de bedrijfsdoelstellingen.</p>
            </a>
            <a class="card" href="<?php echo Config::getRoot(); ?>/services/freelance-it-staffing">
              <h3>Freelance IT staffing</h3>
              <p>De zoektocht naar deskundige kennis of extra bezetting bij tijdelijke opdrachten is vaak maatwerk. Als betrouwbare tussenpartij zoeken wij voor jou de beste en meest geschikte IT-professionals.</p>
            </a>
            <a class="card" href="<?php echo Config::getRoot(); ?>/services/project-management">
              <h3>Project management</h3>
              <p>Van bedrijfsanalyse tot aan de oplevering van het project wordt iedere fase gepland en uitgevoerd. Dit alles wordt opgevolgd binnen de gewenste en afgesproken tijd, scope, kwaliteit en budget.</p>
            </a>
            <a class="card" href="<?php echo Config::getRoot(); ?>/services/it-infrastructure">
              <h3>IT infrastructure</h3>
              <p>Een solide infrastructuur is fundamenteel voor de digitalisering van ieder bedrijf. Het voorziet de faciliteiten die vereist zijn om de steeds hogere eisen van de bedrijfscontinuïteit te garanderen.</p>
            </a>
            <a class="card" href="<?php echo Config::getRoot(); ?>/services/web-and-development">
              <h3>Web &amp; Development</h3>
              <p>Als vaste partner helpen we je graag op weg met je online aanwezigheid of digitale projecten. Er wordt met de beste lokale partners samengewerkt voor mobiele apps, webshops of specifiek maatwerk.</p>
            </a>
            <a class="card" href="<?php echo Config::getRoot(); ?>/services/software-and-licenses">
              <h3>Software &amp; Licenses</h3>
              <p>Besteed het beheer van abonnementen uit en laat je adviseren voor de aanschaf en optimalisatie van de softwarelicenties. Uiteraard mag ook de correcte installatie door ons verwacht worden.</p>
            </a>
          </nav>
        </div>
      </section>
    </main>
<?php require_once(Config::getRootDir() . '/libs/footer.php'); ?>