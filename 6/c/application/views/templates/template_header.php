<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= base_url('/assets/fontawesome/css/all.css'); ?>" rel="stylesheet">
    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand font-weight-bold" href="#">Arkademy Bootcamp</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  <?= (uri_string()=='')?"active":"" ?>">
        <a class="nav-link" href="<?= site_url(''); ?>">Names <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= (uri_string()=='work')?"active":"" ?>">
        <a class="nav-link" href="<?= site_url('work'); ?>">Work</a>
      </li>
      <li class="nav-item <?= (uri_string()=='salary')?"active":"" ?>">
        <a class="nav-link" href="<?= site_url('salary'); ?>">Salary</a>
      </li>
    </ul>
  </div>
</nav>