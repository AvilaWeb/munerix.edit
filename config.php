<?php session_start();
	/** Copyright 2021 Munerix. All rights reserved. */

	//require 'libs/vendor/autoload.php';
	//use Defuse\Crypto\Crypto;
	//use Defuse\Crypto\Key;

	//Dotenv\Dotenv::createImmutable(Config::getRootDir().'/../../munerix_variables/')->load();
	//Dotenv\Dotenv::createImmutable(Config::getRootDir().'/_local/')->load();

	function cleanup($string)
	{
		$string = strip_tags($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
		$string = trim($string);
		return $string;
	}
	
	function spacecheck($string)
	{
		if (strlen(trim(preg_replace('/\xc2\xa0/',' ',$string))) == 0)
			return false;
		else
			return true;
	}
	
	class Config {
		const site_id = '7167e3d29657b0f885c37e1c15c163f2';
		private static $company = 'Munerix';
		private static $legalForm = 'BV';
		private static $seatAddress = 'Gentstraat 188';
		private static $seatZipCity = '8770 Ingelmunster';
		private static $registrationNumber = '0711.777.882';
		
		public static function getRootDir() {
			return dirname(__FILE__);
		}
		
		/*public function getRecaptchaKey() {
			$envars = EnVars::getInstance();
			return $envars->decrypt($_ENV['RECAPTCHA_KEY']);
		}*/
		
		public function getCompany() {
			return Config::$company;
		}
		
		public function getLegalCompanyName() {
			return Config::$company . ' ' . Config::$legalForm;
		}
		
		public function getSeatAddress() {
			return Config::$seatAddress;
		}
		
		public function getSeatZipCity() {
			return Config::$seatZipCity;
		}
		
		public function getRegistrationNumber() {
			return Config::$registrationNumber;
		}
		
		public function getVATNumber() {
			return 'BE' . Config::$registrationNumber;
		}
		
		public static function isCurrDir($page) {
			return (strpos(Config::getCurrDir(), $page) !== false);
		}
		
		public static function getCurrUrl() {
			return Config::getRoot() . Config::getCurrDir();
		}
		
		private static function getCurrDir() {
			return $_SERVER['SCRIPT_NAME'];
		}
		
		public static function getRoot() {
			return ($_SERVER['SERVER_NAME'] == 'localhost') ? ('http://localhost') : ((isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://') . $_SERVER['SERVER_NAME']);
		}
	}
	
	/*class EnVars {
		protected static $instance;
		private $envKey;
		
		private function __construct() {
			$file = fopen(Config::getRootDir() . '/_local/cypher', 'r');
			while(!feof($file)) {
				foreach(unpack('C*',fgets($file)) as $dec) {
					$tmp = dechex($dec);
					$hex[] .= strtolower(str_repeat('0', 2-strlen($tmp)).$tmp);
				}
			}
			fclose($file);
			$this->envKey = Key::loadFromAsciiSafeString(join($hex));
		}
		
		public static function getInstance() {
			if (!self::$instance) {
				self::$instance = new EnVars();
			}
			return self::$instance;
		}
		
		public function encrypt($txt) {
			return Crypto::encrypt($txt, $this->envKey);
		}
		
		public function decrypt($encrypted) {
			return Crypto::decrypt($encrypted, $this->envKey);
		}
	}*/
?>