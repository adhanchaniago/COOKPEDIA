<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Cookpedia | Settings | Edit_data_user</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	      <?php echo form_open('settings/editUser/'.$this->uri->segment(3)); ?>
	      <legend>Edit Data</legend>
	      <?php echo validation_errors(); ?>

	      <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $admin[0]['id']?>" placeholder=" ">
	      <div class="form-group">
	        <label for="">Nama</label>
	        <input type="text" class="form-control" name="username" id="username" value="<?php echo $admin[0]['username']?>" placeholder=" ">
	      </div>
	        <div class="form-group">
	        <label for="">Email</label>
	        <input type="email" class="form-control" name="email" id="email" value="<?php echo $admin[0]['email']?>" placeholder="">
	      </div>
	      <button type="submit" class="btn btn-primary">Submit</button>
	      <?php echo form_close(); ?>
	    </div>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>