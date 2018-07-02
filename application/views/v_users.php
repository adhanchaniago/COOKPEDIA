<!DOCTYPE html>

<html lang="id">

<head>

      <meta charset="utf-8">

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