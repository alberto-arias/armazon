<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es-es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es-es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-es"> <!--<![endif]-->
<html lang="es-es">

<head>
  <meta charset="utf-8"/>
  <title><?php echo ((isset($page_title)) ? $page_title : ''); ?></title>
  <meta name="description" content="" />
  <meta name="author" content="Alberto Arias" />
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
  <meta name="robots" content="index, follow" />
  <link rel="Shortcut Icon" type="image/ico" href="/favicon.ico" />
  <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon.png" />
  <link rel="stylesheet" href="_assets/_css/_style.css" type="text/css"/>
  <?php if (isset($page_styles)): ?>
  <style>
  	<?php echo $page_styles; ?>
	</style>
	<?php endif; ?>
</head>

<body<?php echo ((isset($body_classes)) ? ' class="'. $body_classes .'"' : ''); ?>>