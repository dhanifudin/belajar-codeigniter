<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php isset($title) ?: $title = 'Pemrograman Web Berbasis Framework'; echo $title ?></title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
  <?php $this->load->view('layouts/header') ?>
