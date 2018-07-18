<!DOCTYPE html>

<html lang="id">

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
            <li class="nav-item"> <a class="nav-link" href="<?php echo site_url() ?>/Home/gridDinamis">JS GRID</a></LI>
            <LI> <a class="nav-link active" href="<?php echo site_url() ?>/users">Paging</a></LI>
          </li>
        </ul>
      </div>
    </nav>

      <meta charset="utf-8">
      <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Installasi JsGrid </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script>

      <title>Data Users</title>

      <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">

    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>

 

<div class="container">

      <h1>Data <small>Users! </small></h1>

      <table class="table table-bordered table-striped" id="mydata">

            <thead>

                  <tr>

                        <td>Id Users</td>

                        <td>Email Users</td>

                        <td>Username</td>

                        <td>Password Users</td>

                        <td>Jenis Kelamin</td>

                        

                        <td>Status Users</td>

                  </tr>

            </thead>

            <tbody>

                  <?php

                        foreach($data->result_array() as $i):

                              $id=$i['id'];

                              $email=$i['email'];

                              $username=$i['username'];

                              $password=$i['password'];

                              $gender=$i['gender'];

                              

                              $status=$i['status'];

                  ?>

                  <tr>

                        <td><?php echo $id;?> </td>

                        <td><?php echo $email;?> </td>

                        <td><?php echo $username;?> </td>

                        <td><?php echo $password;?> </td>

                        <td><?php echo $gender;?> </td>

                        

                        <td><?php echo $status;?> </td>

                  </tr>

                  <?php endforeach;?>

            </tbody>

      </table>

     

</div>

 

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>

<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>

<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>

</body>

</html>