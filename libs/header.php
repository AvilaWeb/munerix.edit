<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Jeroen Daenekindt">
    <meta name="keywords" content="<?php echo Config::getCompany(); ?>, munerix.be">
    <meta name="theme-color" content="#485A5F">
    <meta name="google" content="notranslate">
    <meta name="description" content="<?php echo Config::getCompany(); ?> biedt IT Consultancy op maat voor uw onderneming. Van bedrijfsanalyses en projectmanagement tot implementaties en onderhoud.">
    <meta property="og:description" content="<?php echo Config::getCompany(); ?> biedt IT Consultancy op maat voor uw onderneming. Van bedrijfsanalyses en projectmanagement tot implementaties en onderhoud." />
    <meta property="og:title" content="IT Consultancy | <?php echo Config::getCompany(); ?>" />
    <title>IT Consultancy | <?php echo Config::getCompany(); ?></title>
    <link href="<?php echo Config::getRoot(); ?>" rel="canonical">
    <link href="<?php echo Config::getRoot(); ?>/img/favicon.svg" rel="icon" type="image/svg+xml">
    <link href="<?php echo Config::getRoot(); ?>/img/favicon.ico" rel="alternate icon" type="image/x-icon">
    <link href="<?php echo Config::getRoot(); ?>/styles/styles-all.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Config::getRoot(); ?>/styles/styles-max-width-757px.css" rel="stylesheet" type="text/css" media="screen and (max-width: 757px)">
    <link href="<?php echo Config::getRoot(); ?>/styles/styles-min-width-758px-max-width-979px.css" rel="stylesheet" type="text/css" media="screen and (min-width: 758px) and (max-width: 979px)">
    <link href="<?php echo Config::getRoot(); ?>/styles/styles-min-width-980px-max-width-1229px.css" rel="stylesheet" type="text/css" media="screen and (min-width: 980px) and (max-width: 1229px)">
    <link href="<?php echo Config::getRoot(); ?>/styles/styles-min-width-1230px-max-width-1449px.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1230px) and (max-width: 1449px)">
    <link href="<?php echo Config::getRoot(); ?>/styles/styles-min-width-1950px.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1950px)">
    <style><?php include Config::getRootDir() . '/styles/styles-header-bg.css'; ?>
    </style>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bitter:normal,bold,italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:light,normal,bold" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:normal,bold" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:medium" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
  echo (($_SERVER['REQUEST_METHOD'] != 'POST') ? '    <script defer src="' . Config::getRoot() . '/libs/' . (Config::isCurrDir('home') ? 'intro_hero' : 'intro') . '.js"></script>' . "\n" : '    <script defer src="' . Config::getRoot() . '/libs/POST_no_intro.js"></script>' . "\n");
  echo (Config::isCurrDir('home') ? '    <script defer src="' . Config::getRoot() . '/libs/jquery.easing.min.js"></script>' . "\n" : '');
  echo (Config::isCurrDir('contact') ? '    <script defer src="' . Config::getRoot() . '/libs/gmaps.js"></script>' . "\n" . '    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBksa5eCq24IiHJeUyrAPZTmt3sXD7m2r4&callback=initMunerixMap"></script>' . "\n" : '');
?>
    <script defer src="<?php echo Config::getRoot(); ?>/libs/js-all.js"></script>
  </head>
  <body x-ms-format-detection="none">
    <header>
      <div class="page">
        <svg id="Munerix">
          <polygon id="M" points="24.61,25.8 24.61,4.58 15.85,25.8 12.48,25.8 3.69,4.57 3.69,25.8 0,25.8 0,0 5.61,0 14.13,20.65 22.69,0 28.29,0 28.29,25.8"/>
          <path id="u" d="M38.65,26c-2.47,0-4.11-0.52-5.17-1.64c-1.03-1.09-1.51-2.75-1.51-5.24V7.48h3.49v11.64c0,2.77,0.12,3.89,3.16,3.89c3.8,0,5.15-0.65,5.15-4.32V7.48h3.49V25.8h-3.52v-1.41C42.45,25.79,40.4,26,38.65,26z"/>
          <path id="n" d="M63.07,25.8V13.57c0-2.84-0.89-3.29-3.76-3.29c-2.07,0-3.24,0.31-3.9,1.03c-0.63,0.69-0.89,1.81-0.89,3.89V25.8h-3.49V7.48h3.49V8.7c1.22-1.23,3.26-1.42,5.02-1.42c2.81,0,4.48,0.47,5.57,1.58c1.02,1.03,1.48,2.59,1.44,4.91l0,12.03H63.07z"/>
          <path id="e" d="M78.04,26c-3.6,0-5.63-0.64-6.82-2.12c-1.22-1.53-1.46-3.9-1.46-7.22c0-3.96,0.49-6.13,1.69-7.48c1.2-1.35,3.11-1.9,6.59-1.9c3.22,0,5,0.46,6.15,1.58c1.22,1.19,1.73,3.16,1.73,6.6v2.19H73.35c0.01,2.46,0.14,3.78,0.69,4.48c0.59,0.74,1.86,0.88,3.99,0.88c3.76,0,4.32-0.3,4.32-2.26l3.56-0.03C85.92,26,81.37,26,78.04,26z M82.32,14.66c-0.07-1.94-0.23-3.18-0.78-3.75c-0.52-0.54-1.5-0.64-3.5-0.64c-2.24,0-3.38,0.28-3.93,0.96c-0.52,0.64-0.64,1.74-0.73,3.43H82.32z"/>
          <path id="r" d="M88.76,25.8V7.48h3.45l-0.08,1.28c0.99-0.97,2.52-1.48,4.51-1.48c3.51,0,5.29,1.8,5.29,5.35l-3.36,0.1c0-1.93-0.54-2.46-2.49-2.46c-1.38,0-2.35,0.29-2.94,0.9c-0.64,0.65-0.92,1.7-0.88,3.31l0,11.31H88.76z"/>
          <rect id="i" x="104.36" y="7.48" width="3.49" height="18.32"/>
          <g id="x">
            <path d="M118.63,12.51l-3.38-5.03h-3.99l5.13,7.76C117.01,14.4,117.75,13.5,118.63,12.51z"/>
            <path d="M120.83,16.73c-0.48,0.74-1.06,1.7-1.65,2.73l4.19,6.34h4.21l-6.42-9.55C121.04,16.41,120.93,16.57,120.83,16.73z"/>
            <path class="x-red" d="M136.29,0.59c0,0-8.73,4.46-13.02,8.63c-2.68,2.61-4.87,4.95-6.35,7.07s-6.66,9.5-6.66,9.5h4.24c0,0,3.47-6.63,5.45-9.65C124.38,9.4,131.04,3.6,136.29,0.59z"/>
          </g>
        </svg>
        <nav>
          <div class="menu-toggle" onclick="toggleMenu()">
            <div class="menu-bar1"></div>
            <div class="menu-bar2"></div>
            <div class="menu-bar3"></div>
          </div>
          <ul id="menu">
            <li>
              <a href="<?php echo((Config::isCurrDir('home') ? '' : Config::getRoot() . '/home/')); ?>#home">Home</a>
            </li>
            <li class="dropdown">
              <a href="<?php echo((Config::isCurrDir('home') ? '' : Config::getRoot() . '/home/')); ?>#services">Diensten</a>
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
            </li>
            <li>
              <a href="<?php echo Config::getRoot(); ?>/jobs">Jobs</a>
            </li>
            <li>
              <a href="<?php echo Config::getRoot(); ?>/contact">Contact</a>
            </li>
          </ul>
          <div hidden id="menu-shade" onClick="removeMenu()"></div>
        </nav>
      </div>
    </header>
    <div class="transition-container">
      <div class="transition-curtain">
      </div>
    </div>
