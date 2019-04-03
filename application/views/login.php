<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	  <div class="container">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="top:10rem;">
            <div class="card">
                <div class="card-header bg-dark text-white" style="height: 7rem">
                    <h4 class="text-center">EXPERT SYSTEM</h4>
                    <h5 class="text-center">Login System</h5>
                    <p class="text-center">Konsultasi Gaya Belajar Anak</p>
                </div>
                <div class="card-body">
                    <div class="bg-default">
                      <p style="color: red; font-style: italic;">
                        <?php
                          $info = $this->session->flashdata('info');
                          if (!empty($info)) {
                             echo $info;
                           } 
                        ?>
                      </p>
                    </div>
                    <form method="POST" action="<?php echo base_url('C_login/prosesLogin'); ?>">
                      <div class="input-group">
                            <span class="input-group-addon" id="addon1">U</span>
                            <input type="text" class="form-control" placeholder="nik" name="nik" aria-describedby="addon1" required="">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon" id="addon1">P</span>
                            <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="addon1" required="">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary btn-block btn-sm" value="Login" name="login">
                    </form>
                    <br>
                    <a href="<?php echo base_url('C_login/daftar'); ?>" class="btn btn-success btn-block btn-sm text-white">Daftar Ke System</a>
                    <br>
            </div>
        </div>
        <div class="col-md-4"></div>
        </div>
    </div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>