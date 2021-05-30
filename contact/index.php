<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/config.php');

  //use PHPMailer\PHPMailer\PHPMailer;
  //use PHPMailer\PHPMailer\SMTP;

  class FormContact {
    private static $input_firstname = '';
    private static $input_lastname = '';
    private static $input_email = '';
    private static $input_phone = '';
    private static $input_position = '';
    private static $input_company = '';
    private static $input_message = '';
    private static $input_gdpr = '';
    private static $recaptcha_token = '';
    private static $recaptcha_response = '';
    private static $recipient = 'info@munerix.be';

    public static function setVariables() {
      self::$input_firstname = ucwords(strtolower(cleanup($_POST['inputFirstName'])));
      self::$input_lastname = ucwords(strtolower(cleanup($_POST['inputLastName'])));
      self::$input_email = cleanup($_POST['inputEmail']);
      self::$input_phone = cleanup($_POST['inputPhone']);
      self::$input_position = ucwords(strtolower(cleanup($_POST['inputPosition'])));
      self::$input_company = cleanup($_POST['inputCompany']);
      self::$input_message = ucfirst(cleanup($_POST['txtMessage']));
      self::$input_gdpr = isset($_POST['inputGDPR']);
      self::$recaptcha_token = $_POST['greCaptcha'];
    }

    public static function isCorrect() {
      if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        if (spacecheck(self::$input_firstname) && spacecheck(self::$input_lastname) && spacecheck(self::$input_email) && spacecheck(self::$input_phone) && spacecheck(self::$input_position) && spacecheck(self::$input_company) && spacecheck(self::$input_message)) {
          if (self::validateMail() && self::validatePhone())
            if (self::$input_gdpr)
              return true;
        }
      }
      return false;
    }

    public static function sendMail() {
      /*if (empty($_SESSION[Config::site_id . '_contactform_sent'])) {
        if (self::verifyCaptcha()) {
          $mail = new PHPMailer(false);
          $envars = EnVars::getInstance();
          
          $mail->isSMTP();
          $mail->Host = 'smtp.office365.com';
          $mail->SMTPAuth = true;
          $mail->Username = $_ENV['O365_USER'];
          $mail->Password = $envars->decrypt($_ENV['O365_KEY']);
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port = 587;
          
          $mail->setFrom('info@munerix.be', Config::getCompany());
          $mail->addAddress(self::$recipient);
          $mail->addReplyTo(self::$input_email, self::$input_firstname . ' ' . self::$input_lastname);
          
          $mail->isHTML(true);
          $mail->Subject = 'Bericht van ' . self::$input_firstname . ' ' . self::$input_lastname . ' via het ' . Config::getCompany() . ' contactformulier.';
          $mail->Body = self::buildMessage();
          
          if ($mail->send()) {
            $_SESSION[Config::site_id . '_contactform_sent'] = TRUE;
            return true;
          } else
            return false;
        }
      } else
        return true;*/
      return false;
    }

    /*private static function buildMessage() {
      $body = "<html><head><style>";
      $body .= "body {background-color: #F1F1F1; text-align: justify; margin: 0 auto; padding: 20px;}";
      $body .= "h1 {color: #485A5F; text-transform: uppercase; letter-spacing: 2px; font-size: 18px; font-weight: 700; font-family: 'Roboto Condensed', sans-serif;}";
      $body .= "p {color: #464646; margin-bottom: 25px; letter-spacing: 0.3px; font-size: 14px; font-weight: 400; font-family: 'Varela Round', sans-serif;}";
      $body .= "</style></head><body>";
      $body .= "<h1>Correspondent</h1>";
      $body .= "<p>" . self::$input_firstname . ' ' . self::$input_lastname . "<br/>" . self::$input_position . ' bij ' . self::$input_company . "</p>";
      $body .= "<h1>Bericht</h1>";
      $body .= "<p>" . self::$input_message . "</p>";
      $body .= "<h1>Contact</h1>";
      $body .= "<p>" . self::$input_phone . "<br/>" . self::$input_email . "</p>";
      $body .= "</body></html>";
      return $body;
    }

    private static function verifyCaptcha() {
      $verify = curl_init();
      curl_setopt($verify, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
      curl_setopt($verify, CURLOPT_POST, true);
      curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query(array('secret' => Config::getRecaptchaKey(), 'response' => self::$recaptcha_token, 'remoteip'=> $_SERVER['REMOTE_ADDR'])));
      curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($verify);
      $result = json_decode($response);
      return $result->success;
    }*/

    private static function verifyInput($input) {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (spacecheck($input))
          echo 'value="' . $input . '"';
        else
          echo 'class="error"';
      }
    }

    private static function validatePhone() {
      if (preg_match('/^[0-9 \.\(\)\+\-]+$/', self::$input_phone))
        return true;
      else
        return false;
    }

    private static function validateMail() {
      if (preg_match('/^[_A-z0-9-]+((\.|\+)[_A-z0-9-]+)*@[A-z0-9-]+(\.[A-z0-9-]+)*(\.[A-z]{2,10})$/', self::$input_email))
        return true;
      else
        return false;
    }

    public static function verifyFirstName() {
      self::verifyInput(self::$input_firstname);
    }

    public static function verifyLastName() {
      self::verifyInput(self::$input_lastname);
    }

    public static function verifyEmail() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (self::validateMail())
          echo 'value="' . self::$input_email . '"';
        else
          echo 'class="error" value="' . self::$input_email . '"';
      }
    }

    public static function verifyPhone() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (self::validatePhone())
          echo 'value="' . self::$input_phone . '"';
        else
          echo 'class="error" value="' . self::$input_phone . '"';
      }
    }

    public static function verifyPosition() {
      self::verifyInput(self::$input_position);
    }

    public static function verifyCompany() {
      self::verifyInput(self::$input_company);
    }

    public static function verifyMessage() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!spacecheck(self::$input_message))
          echo 'class="error"';
      }
    }

    public static function getMessage() {
      if (spacecheck(self::$input_message))
        echo self::$input_message;
    }

    public static function verifyGDPR() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!self::$input_gdpr)
          echo 'class="error"';
      }
    }

    public static function echoRecipient() {
      echo self::$recipient;
    }

    public static function echoFirstName() {
      echo self::$input_firstname;
    }
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST')
    FormContact::setVariables();
  else
    unset($_SESSION[Config::site_id . '_contactform_sent']);

  require_once(Config::getRootDir() . '/libs/header.php');
?>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfLv7gZAAAAAMjO_RTKikAU3mFf49MlwwiH1abu"></script>
    <script type="text/javascript">
      function validate_form() {
        var isFilled = true;
        $('input, textarea').each(function() {
          var el = $(this);
          if(!el.val() || /^\s*$/.test(el.val()) || (el.is(':checkbox') && !el.is(':checked'))) {
            el.addClass('error');
            isFilled = false;
          }
        });

        var ml = $("#contact_form input[name='inputEmail']");
        var atpos = ml.val().indexOf("@");
        var dotpos = ml.val().lastIndexOf(".");
        if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= ml.val().length) {
          if(!ml.hasClass('error'))
            ml.addClass('error');
          isFilled = false;
        }

        if(!isFilled)
          return false;
      }

      function reset_input(id) {
        $("#contact_form input[name='" + id + "'], textarea[name='" + id + "']").removeClass('error');
      }

      grecaptcha.ready(function() {
        grecaptcha.execute('6LfLv7gZAAAAAMjO_RTKikAU3mFf49MlwwiH1abu', {action: 'submit'}).then(function(token) {
          document.getElementById('greCaptcha').value = token;
        });
      });
    </script>
    <main>
      <section class="header">
        <div class="page">
          <h1>Contacteer ons</h1>
        </div>
      </section>
      <section>
        <div class="page">
<?php if (FormContact::isCorrect()){ if (@FormContact::sendMail()) { ?>
          <p class="eyecatcher">Uw bericht is succesvol verstuurd. Wij nemen zo snel mogelijk contact met u op.</p>
          <article>
            <p><?php FormContact::echoFirstName(); ?>, allereerst wensen wij u te bedanken voor uw interesse in <?php echo Config::getCompany(); ?> en haar diensten. Wij hebben uw bericht goed ontvangen en zullen zo spoedig mogelijk contact met u opnemen om op al uw vragen een antwoord te bieden. Wij nemen de tijd om uw verwachtingen te bespreken en u te helpen slimme beslissingen te nemen die het beste aan uw behoeften voldoen.</p>
            <p>Pragmatisch en doelgericht zorgen wij ervoor dat uw IT omgeving ook daadwerkelijk de bedrijfsprocessen naar een hoger niveau tillen. Zo slaapt u op beide oren terwijl u zich kan blijven focussen op uw eigen kernactiviteiten.</p>
          </article>
<?php } else { ?>
          <p class="eyecatcher">Er is een onverwachte fout opgetreden. Geen paniek, u treft geen blaam!</p>
          <article>
            <p>In eerste instantie raden wij aan om het bericht alsnog te versturen via onderstaand contactformulier. Indien het gaat om een netwerkfout is de kans re&euml;el dat het probleem geen tweede keer zal voorvallen. Om uw gebruikservaring zo aangenaam mogelijk te houden, hebben wij uw ingevulde gegevens hieronder opnieuw aangeboden. U kan van de gelegenheid gebruik maken om nog enkele laatste aanpassingen door te voeren.</p>
            <p>Indien het versturen bij een tweede of derde poging nog steeds onsuccesvol blijkt te zijn en u bijgevolg deze foutboodschap herhaaldelijk te zien krijgt, is de kans groot dat er zich een fout bevindt in ons berichtverwerkingssysteem. Neem in dat geval contact met ons op via <a href="mailto:<?php FormContact::echoRecipient(); ?>?Subject=Contactformulier" target="_top"><?php FormContact::echoRecipient(); ?></a>. Wij verzoeken u om ons tevens te verwittigen over het probleem. Zo kunnen wij dit zo spoedig mogelijk oplossen.</p>
          </article>
          <form id="contact_form" novalidate onSubmit="return validate_form()" method="post" action="<?php echo(htmlspecialchars(dirname($_SERVER['PHP_SELF']) . "/")); ?>">
            <div class="input-ux input">
              <input type="text" name="inputFirstName" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyFirstName(); ?> autocomplete="off" required />
              <label>Voornaam</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputLastName" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyLastName(); ?> autocomplete="off" required />
              <label>Naam</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputEmail" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyEmail(); ?> autocomplete="off" required />
              <label>Email</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputPhone" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyPhone(); ?> autocomplete="off" required />
              <label>Telefoon</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputPosition" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyPosition(); ?> autocomplete="off" required />
              <label>Functie</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputCompany" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyCompany(); ?> autocomplete="off" required />
              <label>Bedrijf</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux textarea">
              <textarea name="txtMessage" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyMessage(); ?> required><?php FormContact::getMessage(); ?></textarea>
              <label>Uw bericht</label>
              <div class="focus-border"></div>
            </div>
            <label>
              <div class="input-ux checkbox">
                <input type="checkbox" name="inputGDPR" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyGDPR(); ?> required onchange="document.getElementById('btnSubmit').disabled = !this.checked;">
                <svg viewBox="0 0 18 18">
                  <path d="M4.53,9.69,7.8,13,17,3.3V1H1V17H17V1"></path>
                </svg>
              </div>
              <span>Ik begrijp en aanvaard dat ik via de ingevulde informatie gecontacteerd kan worden.</span>
            </label>
            <input type="hidden" name="greCaptcha" id="greCaptcha" />
            <button type="submit" name="btnSubmit" id="btnSubmit" disabled>Verzenden</button>
          </form>
<?php }} else { ?>
          <p class="eyecatcher">Voelt u zich overtuigd dat <?php echo Config::getCompany(); ?> de beste partnerkeuze is?</p>
          <article>
            <p>Wij nemen de tijd om uw vragen en verwachtingen te bespreken en u te helpen slimme beslissingen te nemen die het beste aan uw behoeften voldoen. Pragmatisch en doelgericht zorgen wij ervoor dat uw IT omgeving ook daadwerkelijk de bedrijfsprocessen naar een hoger niveau tillen. Zo slaapt u op beide oren terwijl u zich kan blijven focussen op uw eigen kernactiviteiten.</p>
          </article>
          <form id="contact_form" novalidate onSubmit="return validate_form()" method="post" action="<?php echo(htmlspecialchars(dirname($_SERVER['PHP_SELF']) . "/")); ?>">
            <div class="input-ux input">
              <input type="text" name="inputFirstName" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyFirstName(); ?> autocomplete="off" required />
              <label>Voornaam</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputLastName" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyLastName(); ?> autocomplete="off" required />
              <label>Naam</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputEmail" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyEmail(); ?> autocomplete="off" required />
              <label>Email</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputPhone" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyPhone(); ?> autocomplete="off" required />
              <label>Telefoon</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputPosition" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyPosition(); ?> autocomplete="off" required />
              <label>Functie</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux input">
              <input type="text" name="inputCompany" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyCompany(); ?> autocomplete="off" required />
              <label>Bedrijf</label>
              <div class="focus-border"></div>
            </div>
            <div class="input-ux textarea">
              <textarea name="txtMessage" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyMessage(); ?> required><?php FormContact::getMessage(); ?></textarea>
              <label>Uw bericht</label>
              <div class="focus-border"></div>
            </div>
            <label>
              <div class="input-ux checkbox">
                <input type="checkbox" name="inputGDPR" onClick="reset_input(this.name)" onFocus="reset_input(this.name)" <?php FormContact::verifyGDPR(); ?> required onchange="document.getElementById('btnSubmit').disabled = !this.checked;">
                <svg viewBox="0 0 18 18">
                  <path d="M4.53,9.69,7.8,13,17,3.3V1H1V17H17V1"></path>
                </svg>
              </div>
              <span>Ik begrijp en aanvaard dat ik via de ingevulde informatie gecontacteerd kan worden.</span>
            </label>
            <input type="hidden" name="greCaptcha" id="greCaptcha" />
            <button type="submit" name="btnSubmit" id="btnSubmit" disabled>Verzenden</button>
          </form>
<?php } ?>
        </div>
      </section>
      <section id="location"></section>
    </main>
<?php require_once(Config::getRootDir() . '/libs/footer.php'); ?>