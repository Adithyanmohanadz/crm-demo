<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body >
<div class="d-flex flex-row justify-content-center p-2" style="margin-top: 5px; background-color: #F5F5F5;">
<?php 
$show ='class="text-white menu-link btn btn-white bg-primary mx-1"';
$hide ='class="menu-link btn btn-white bg-white mx-1"';
?>

  <a href="<?= base_url() ?>main"  <?php if($active == 'customer'){echo $show;}else{echo $hide;}?> >
    <div data-i18n="Connections">Customer Registration </div>
  </a>

  <a href="<?= base_url() ?>main/item" <?php if($active == 'item'){echo $show;}else{echo $hide;}?> ">
    <div data-i18n="Connections">Item Creation </div>
  </a>

  <a href="<?= base_url() ?>main/rent"  <?php if($active == 'rent'){echo $show;}else{echo $hide;}?> ">
    <div data-i18n="Connections">Rent Creation </div>
  </a>
</div>