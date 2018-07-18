<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cookpedia | Recipe</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Skranji|Encode+Sans+Condensed|Lato:700" rel="stylesheet">
    <!-- End of Google font -->
    <style>
     #txt {
        font-size: 17px;
        font-family: 'Encode Sans Condensed', sans-serif;
        letter-spacing: 0.5px;
        line-height: 1.5s;
      }
      #logo {
        color: #F71404;
        font-family: 'Skranji', cursive;
        text-align: center;
        text-shadow: 2px: 2px;
      }
      #loto {
        font-size: 18px;
        font-family: 'Lato', sans-serif;
        text-align: center;
      }

    </style>

  </head>
  <body>
    <div id="logo">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="text-align: center;">
        <a class="navbar-brand" href="<?php echo site_url()?>/Home">Cookpedia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto" id="loto">
              <li><a class="nav-link active" href="<?php echo site_url()?>/Home">What's New<span class="sr-only">(current)</span></a></li>
              <li><a class="nav-link" href="<?php echo site_url()?>/about">About<span class="sr-only">(current)</span></a></li>
          </ul>

          <div class="dropdown nav navbar-nav navbar-right">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url().'/assets/uploads/'.$value['photo']; ?>" alt="logo" style="width:30px;"> 
                <?php echo $this->session->userdata('logged_in')['username']; ?><span class="sr-only">(current)</span>
            </button>
            <div class="dropdown-menu" id="loto">
              <a class="dropdown-item" href="<?php echo site_url()?>/grafik">Grafik Login</a>
              <a class="dropdown-item">
                <?php if($this->session->userdata('logged_in')['status'] == 'admin') { 
                  echo '<li><a class="nav-link" href="site_url()/grafik"><font color="#6611AA"> 
                        <b>Dashboard Admin</b></font><span class="sr-only">(current)</span></a>'; } ?>
              </a>
              <a class="dropdown-item" href="<?php echo site_url()?>/settings">Settings</a>
              <a class="dropdown-item" href="<?php echo base_url('index.php/Login/logout') ?>">Logout</a>
            </div>
          </div>
        </div>
      </nav> <!-- End of Navbar -->
    </div>
    <div class="container-fluid" style="margin-top:70px">
      <div id="txt">
        <div class="row" style="padding-left: 15%; padding-right: 15%;">
          <div class="col-sm-12">
            <div>
              <div>
                <center><img src="<?=base_url().'/assets/uploads/'.$recipe['photo']; ?>" style="width:450px;"></center>
              </div>
              <div>
                <h1 style="color: green;"><b>Resep <?=$recipe['title'] ?></b></h1> 
                <hr class="m-sm-2">
              </div>
              <div>
                <?=$recipe['descripction'] ?>
                <br><br>
              </div>
              <div>
                <h4 style="text-align: right; color: grey;"> 
                  <?=$recipe['portion']  . ' Porsi dibuat selama ' . $recipe['duration'] .' menit' ?>
                    
                </h4>
                <h2 style="color: grey;"> Bahan Bahan</h2>  
                <?=$recipe['ingredients'] ?>
                <br><br>
              </div>
              <div>
                <h2 style="color: grey;"> Langkah</h2>
                <?=$recipe['steps'] ?>
                <br><br>
              </div>
              <a href="<?php echo site_url()?>/Home" class="btn btn-outline-secondary btn-block">Kembali</a> <br><br>
            </div>   
          </div>
        </div> <!-- End of class row -->
      </div>     
    </div>  
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/growl/js/jquery.growl.js"></script>
  </body>
</html>