<!DOCTYPE html>
<html>
<head>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="<?=site_url()?>/Home">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li >
            <a class="nav-link" href="<?php echo site_url() ?>/Akun">CRUD</a></li>
            <li class="nav-item active"> <a class="nav-link" href="<?php echo site_url() ?>/Home/gridDinamis">JS GRID</a></LI>
            <LI> <a class="nav-link" href="<?php echo site_url() ?>/users">Paging</a></LI>
          </li>
        </ul>
      </div>
    </nav>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Installasi JsGrid </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>
</head>
<body>
    <div id="jsGrid"></div>
</body>
</html>