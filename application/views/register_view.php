<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
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
      background-image: url('<?=base_url()?>/assets/imgdesign/bg-login.jpg');
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat;
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
    </style>
  </head>

  <body class="text-center">

    <form class="form-signin" method="post" action="<?php echo base_url('index.php/Login/register') ?>">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 style="font-family: Skranji">Please Sign In</h1>

        <div id="txt">
          <?php echo validation_errors(); ?>
          <label for="username" class="sr-only">Username</label>
          <input type="username" name="username" id="username" class="form-control" placeholder="Username" autofocus>
          <label for="email" class="sr-only">Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" autofocus>
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <button type="submit" class="btn btn-block btn-lg btn-primary">Sign Up</button>
          <a href="<?php echo base_url('index.php/Login') ?>" class="btn btn-block btn-lg btn-secondary">Back to Login</a> 
        </div>
      </form>


    </form>
  </body>
</html>
