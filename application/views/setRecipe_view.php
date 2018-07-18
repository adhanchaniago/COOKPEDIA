<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cookpedia | Settings</title>

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
    <div class="row">
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
	        
	          
	            
	         

			<?php echo form_open_multipart('recipe/setRecipe/'); ?>
			<div class="row container-fluid">
		      	<legend>Share your recipe here.. <hr class="m-sm-2"> </legend>
		      	<?php echo validation_errors(); ?>
		      	<!-- <div class="col-sm-4" style="text-align: center;">
			        Photo of your food

			        <hr class="m-sm-2">
		        </div> -->
		      	<div class="col-sm-12">
		          	Information recipe
		          	<hr class="m-sm-2">
		          	<div class="form-group">
			        	<input type="hidden" class="form-control" name="author" id="author" value="<?php echo $this->session->userdata('logged_in')['id']?>" placeholder=" ">
			    	</div>
					<div class="form-group">
				    	<label for="title">Title</label>
			        	<input type="text" class="form-control" name="title" id="title" value="" placeholder=" ">
			    	</div>
			    	<div class="form-group">
				    	<label for="descripction">Descripction</label>
			        	<textarea rows="4" cols="147" name="descripction" id="descripction" value="" placeholder="" >  </textarea>
			    	</div>
				    <div class="form-group">
				        <label for="portion">Portion</label>
				        <input type="number" class="form-control" name="portion" id="portion" value="1" placeholder="">
				    </div>
				    <div class="form-group">
				        <label for="duration">Duration (minutes)</label>
				        <input type="number" class="form-control" name="duration" id="duration" value="0" placeholder="">
				    </div>
			    	<div class="form-group">
				    	<label for="ingredients">Ingredients</label>
			        	<textarea rows="4" cols="147" name="ingredients" id="ingredients" value="" placeholder="" >  </textarea>
			    	</div>
			    	<div class="form-group">
				    	<label for="steps">Steps</label>
			        	<textarea rows="4" cols="147" name="steps" id="steps" value="" placeholder="" >  </textarea>
			    	</div>
			    	<div class="form-group">
				    	<label for="photo">Photo</label>
			                  <input type="File" class="form-control" name="photo" placeholder="upload file">
			    	</div>
		        </div>
			    <button type="submit" class="btn btn-primary">Submit</button>
		    <?php echo form_close(); ?>

			</div> <!-- End of class row --> 
	      </div>   <!-- end of div txt -->
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