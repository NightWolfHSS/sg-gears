<?php 
  /* 
  * you can create table for seo other pages this webSite
  * seo title | seo map meta |
  * path url 
  */

  $path =  $_SERVER['REQUEST_URI'];
  $str = explode('/', $path);

  /*
  * show title for pages
  */
  if ($path == '/' || $path == '/home') {
    $title = 'zuborez.kz | Главная';
    $description = 'Добро пожаловать на сайт zuborez.kz, изготовления металопродуктов, шестерн в Казахстане, Караганде';
    $keyworks = 'металопродукты в Караганде и Казахстане, узнать о создании технологий металопродуктов, шестерны в Караганде и Казахстане';

  }
  if ($path == '/about') {
    $title = 'О нас zuborez.jz';
    $description = 'добро пожаловать на сайт zuborez, сдесь вы узнаете многое про технологию изготовления металопродуктов шестерн, по Караганде и Казахстану, и найти контактные данные';
    $keyworks = 'о нашей комании, zuborez.kz Казахстан, Караганда. технология изготовлений металломатериалов.';
  }
  if ($path == '/gallery') {
     $title = 'Галлерея zuborez.kz';
     $description = 'добро пожаловать на zuborez.kz, галллерея сайте, здесь вы узнаете как изготавливается металопродукты шестерн.';
     $keyworks = 'перейти в галлерею zuborez.kz, гаррелеря zuborez.kz';
  }
  if ($path == '/product') {
     $title = 'Продукция, zuborez.kz';
     $description = 'Добро пожаловать на сайт zuborez.kz, тут можно выбрать продукцию, шестерн различных параметров в Караганде, Казахстане';
     $keyworks = 'перейти на сайт - zuborez.kz, продукция в Караганде и Казахстане, zuborez.kz - металопродукты';
  }

  if ($path == '/service') {
     $title = 'Сервисы, zuborez.kz';
     $description = 'Добро пожаловать на zuborez.kz, узнайте больше, о наших сервисах';
     $keyworks = 'Сервивы zuborez.kz, о сервисах узнать на сайте zuborez.kz';
  }

?>


<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keyworks; ?>">
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>components.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>responsee.css">
  <link rel="stylesheet" href="<?php echo OWL_PATH ?>owl.carousel.css">
  <link rel="stylesheet" href="<?php echo OWL_PATH ?>owl.theme.css">
  <!-- CUSTOM STYLE -->  
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>template-style.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="<?php echo JS_PATH ?>/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?php echo JS_PATH ?>/jquery-ui.min.js"></script>    
  <script type="text/javascript" src="<?php echo JS_PATH ?>/modernizr.js"></script>
  <script type="text/javascript" src="<?php echo JS_PATH ?>/responsee.js"></script>   
  <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
</head>