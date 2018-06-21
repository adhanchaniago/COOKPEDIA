








ini hal login









<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cookpedia</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:200|Skranji" rel="stylesheet">
    <!-- End of Google font -->

    <style>
      html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      padding-left: 100px;
      background-image: url('../assets/imgdesign/bg-login.jpg');
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat;
    }

    #logo {
      color: #F71404;
      font-size: 62px;
      font-family: 'Skranji', cursive;
      text-align: center;
      text-shadow: 4px 4px #000;
    }

    #txt {
      font-size: 50px;
      font-family: 'Dosis', sans-serif;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .btn-transparent {
      background: transparent;
      color: #F2F2F2;
      -webkit-transition: background .2s ease-in-out, border .2s ease-in-out;
      -moz-transition: background .2s ease-in-out, border .2s ease-in-out;
      -o-transition: background .2s ease-in-out, border .2s ease-in-out;
      transition: background .2s ease-in-out, border .2s ease-in-out;
    }

    .btn-transparent:hover {
        color: white;
        background-color: #007FFF;
    }
    </style>

  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/cekLogin') ?>">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <div id="logo"> 
        Cookpedia
      </div>

      <div id="txt">
        <?php echo validation_errors(); ?>
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-transparent btn-block" type="submit">Sign in</button>
        <a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-lg btn-transparent btn-block">Sign up</a> 
      </div>
    </form>
  </body>
</html>