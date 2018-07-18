<?php 
        $this->load->view('header');
     ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="<?=site_url()?>/Home">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url() ?>/Akun">CRUD</a></li>
           <LI> <a class="nav-link" href="<?php echo site_url() ?>/Home/gridDinamis">JS GRID</a></LI>
           <LI> <a class="nav-link" href="<?php echo site_url() ?>/users">Paging</a></LI>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
      <a href="<?php echo base_url('index.php/Akun/create') ?>" class="btn btn-primary my-3">Tambah</a>
      <table class="table table-hover">
        <thead>
          <th>ID</th>
          <th>Email</th>
          <th>Password</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Status</th>
          <th>Photo</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          <?php foreach ($Akun_list as $key => $value): ?>
            <tr>
              <td><?php echo $value['id'] ?></td>
              <td><?php echo $value['email'] ?></td>
              <td><?php echo $value['password'] ?></td>
              <td><?php echo $value['gender'] ?></td>
              <td><?php echo $value['phone'] ?></td>
              <td><?php echo $value['status'] ?></td>
              <td><?php echo $value['photo'] ?></td>
              <td>
                <a href="<?php echo base_url("index.php/Akun/update/".$value['id']) ?>" class="btn btn-sm btn-success">Edit</a>
                <a href="<?php echo base_url("index.php/Akun/deleteData/".$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
            
          <?php endforeach ?>
        </tbody>
      </table>
    </main>

    
    <<?php 
        $this->load->view('footer');
     ?>
  