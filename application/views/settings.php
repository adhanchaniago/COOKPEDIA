<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cookpedia | Settings</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Skranji|Encode+Sans+Condensed|Lato:700" rel="stylesheet">
    <!-- End of Google font -->
    <style>
      #txt {
        font-size: 30px;
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
      .ss {
        font-size: 10px;
        font-family: 'Lato', sans-serif;
        text-align: center;
      }

    </style>
    <script>
      function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('clock').innerHTML =
          h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
    }
    </script>

  </head>
  <body onload="startTime()">
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
              <img src="../assets/uploads/<?php echo $value['photo']; ?>" alt="logo" style="width:30px;"> 
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
    <div class="container" style="margin-top:70px">
      <?php if($error = $this->session->flashdata('error')){ ?>
              <div class="alert alert-warning" role="alert">
                <?=$error?>
              </div>
      <?php } ?>
      <?php if($success = $this->session->flashdata('success')){ ?>
              <div class="alert alert-success" role="alert">
                <?=$success?>
              </div>
      <?php } ?>
    <div id="txt">
        <div class="row">
          <div class="col-sm-4 text-capitalize" style="text-align: center; margin-top:50px">
              <div id="clock"></div>
              <?php if ($value['photo']==NULL) {?>
                <img src="<?=base_url()?>/assets/imgdesign/user/avatar1.png" style="width: 350px; height: 350px">
              <?php } else {?> 
                <img src="<?=base_url()?>assets/uploads/<?php echo $value['photo']?>" style="width: 350px; height: 350px">
              <?php } ?>
            <br>
            <kbd><?php echo $value['status']; ?></kbd>
          </div>
          <div class="col-sm-8">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#details">Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#recipe">Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#chgpass">Change Password</a>
              </li>
            </ul> <!-- End of Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content">
              <div id="details" class="container tab-pane active"><br>
                <p class="lead">
                  <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $this->session->userdata('logged_in')['id']?>" placeholder=" ">
                <!-- Data From User -->
                <table class="table table-hover table-inverse lead">
                  <tbody>  
                    
                    <tr>
                      <td width="17%">Nama</td>
                      <td width="1%">:</td>
                      <td><?php echo $value['username']; ?></td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td><?php echo $value['email']; ?> </td>
                    </tr>
                    <tr>
                      <td>Gender</td>
                      <td>:</td>
                      <td><?php echo $value['gender']; ?></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td><?php echo $value['phone']; ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>:</td>
                      <td><?php echo $value['status']; ?></td>
                    </tr>
                    <tr>
                      <td>Last Access</td>
                      <td>:</td>
                      <td><?php echo $value['last_access']; ?></td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <a href="<?php echo site_url()?>/settings/setUser/<?php echo $value['id']?>" class="btn btn-block btn-outline-info">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              
              </div>
              <div id="recipe" class="container tab-pane fade"><br>
                <div class="row lead">
                  <?php $recipes= $this->db->where('author',$value['id'])->get('recipes');
                    foreach($recipes->result() AS $row){?>
                    <div class="col-sm-12">
                      <table class="table table-responsive table-inverse">
                        <thead>
                          <tr>
                            <th width="10%">ID</th>
                            <th width="70%">Title</th>
                            <th width="20%">Photo</th>
                            <th width="10%">Action</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?=$row->id?></td>
                            <td><?=$row->title?></td>
                            <td><img style="max-width: 100%" src="<?=base_url().'assets/uploads/'.$row->photo ?>"></td>
                            <td>
                              <a href="<?=site_url() . '/settings/deleteRecipe/'. $row->id?>" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"> Delete</i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div id="chgpass" class="container tab-pane fade"><br>
                Silahkan Masukkan Password Lama dan Password Baru Anda..
                <p class="lead">
                  <form class="form-signin" method="post" action="<?php echo base_url('index.php/Settings/changePassword') ?>">
                    <div id="txt">
                      <label for="old_password" class="sr-only">Old Password</label>
                      <input type="password" name="old_password" id="old_password" class="form-control" placeholder="Old Password.." autofocus>
                      <input type="hidden" name="id_user" id="id_user" class="form-control"  value="<?=$value['id']?>">
                      <label for="new_password" class="sr-only">New Password</label>
                      <input type="password" name="new_password" id="new_password" class="form-control" placeholder="New Password..">
                      <label for="confirm_new_password" class="sr-only">Confirm Password</label>
                      <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control" placeholder="Confirm New Password..">
                      <button type="submit" class="btn btn-block btn-lg btn-outline-success">Change Password</button>
                    </div>
                  </form>
                  <br>
                </p>
              </div>
            </div> <!-- End of Tab panes -->
    
          </div>  
        </div> <!-- End of class row -->  
      </div>     
    </div>  
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/growl/js/jquery.growl.js"></script>
  </body>
</html>