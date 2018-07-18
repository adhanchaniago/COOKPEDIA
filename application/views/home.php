<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cookpedia | Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">  
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
          <ul class="nav navbar-nav mr-auto" id="loto">
              <li><a class="nav-link active" href="<?php echo site_url()?>/Home">What's New<span class="sr-only">(current)</span></a></li>
              <li><a class="nav-link" href="<?php echo site_url()?>/about">About<span class="sr-only">(current)</span></a></li>
          </ul>
          <div class="nav navbar-nav navbar-right" style="padding-right: 20px">
            <a class="navbar-light" href="<?php echo site_url()?>/recipe">Tulis Resep<span class="sr-only">(current)</span></a>
          </div>
          <div class="dropdown nav navbar-nav navbar-right">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/uploads/<?php echo $value['photo']; ?>" alt="logo" style="width:30px;"> 
                <?php echo $this->session->userdata('logged_in')['username']; ?><span class="sr-only">(current)</span>
            </button>
            <div class="dropdown-menu" id="loto">
              <a class="dropdown-item" href="<?php echo site_url()?>/grafik">Grafik Login</a>
              <a class="dropdown-item">
                <?php if($this->session->userdata('logged_in')['status'] == 'admin') { 
                  echo '<li><a class="nav-link" href="http://localhost/cookpedia/index.php/akun"><font color="#6611AA"> 
                        <b>Dashboard Admin</b></font><span class="sr-only">(current)</span></a>'; } ?>
              </a>
              <a class="dropdown-item" href="<?php echo site_url()?>/settings">Settings</a>
              <a class="dropdown-item" href="<?php echo base_url('index.php/Login/logout') ?>">Logout</a>
            </div>
          </div>
        </div>
      </nav> <!-- End of Navbar -->
    </div>
    
    <div id="txt">
      <div class="container" style="margin-top:70px;">
        <div class="display-4" style="text-align: center;">
          Check what you like..
        </div>
        <div>
          <div class="row">
            <?php $recipes= $this->db->get('recipes');
            foreach($recipes->result() AS $row){?>

              <div class="col-sm-3">
                <div class="card">
                  <img class="card-img-top" src="<?=base_url().'assets/uploads/'.$row->photo?>" alt="Card image cap" style="max-width: 255px;">
                  <div class="card-body">
                    <h5 class="card-title"><?=$row->title?></h5>
                    <p class="card-text"><?=$row->descripction;?></p>
                    <a href="<?=site_url()?>/recipe/getRecipebyId/<?=$row->id ?>" class="btn btn-primary">read more..</a>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>  
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.min.js"></script>
  </body>
</html>
