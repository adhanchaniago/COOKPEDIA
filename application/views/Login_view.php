<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cookpedia | Login</title>

    <!-- Bootstrap CSS -->
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
          <button type="submit" class="btn btn-block btn-lg btn-success">Sign In</button>
          <a href="<?php echo base_url('index.php/Login/register') ?>" class="btn btn-block btn-lg btn-primary">Sign up</a> 
        </div>
      </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>