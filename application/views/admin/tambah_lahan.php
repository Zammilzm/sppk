<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Floyd</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminasset/plugins/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminasset/plugins/fontawesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminasset/css/theme-floyd.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminasset/css/theme-helper.css') ?>">
</head>
<body>
  <div id="wrapper">
    <div id="sidebar">
      <div id="sidebar-wrapper">
        <div class="sidebar-title">
          <span class="text-size-40 text-loose">Jember</span><br>
          <span class="text-size-18 text-grey">Lahan Kopi Jember</span>
        </div>
        <div class="sidebar-avatar">
          <div class="sidebar-avatar-image"><img class="img-circle" src="<?php echo base_url('assets/img/avatar.jpg'); ?>" /></div>
          <div class="sidebar-avatar-text">Admin</div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>  
          <li class="active"><a href="<?php echo site_url('admin/c_admin')?>"><i class="fa fa-fw fa-font"></i><span>List Lahan</span></a></li>
          <li><a href="<?php echo site_url('admin/c_admin/daftar_verifikasi')?>"><i class="fa fa-fw fa-list-alt"></i><span>Verifikasi Lahan</span></a></li>
          <li><a href="<?php echo site_url('admin/c_admin/kriteria')?>"><i class="fa fa-fw fa-paint-brush"></i><span>Data Kriteria</span></a></li>
          <li><a href="<?php echo site_url('admin/c_admin/kritik')?>"><i class="fa fa-fw fa-wrench"></i><span>Kritik dan Saran</span></a></li>
          <li><a href="<?php echo site_url('admin/c_admin/logout')?>"><i class="fa fa-fw fa-power-off"></i><span>LogOut</span></a></li>
        </ul>
      </div>
    </div>
    <div id="main-panel">
      <div id="top-nav">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <!-- Navbar toggle button -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                <i class="fa fa-bars"></i>
              </button>
              <!-- Sidebar toggle button -->
              <button type="button" class="sidebar-toggle">
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand text-size-24" href="#"><i class="fa fa-star-o"></i> Tambah Lahan Kopi</a>
            </div>
          </div>
        </nav>
      </div>
      <div id="content">
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Tambah Lahan Kopi</h3>
                <span class="text-grey">Fitur ini memungkinkan admin untuk menambah lahan kopi di jember</span>
              </div>
              <div class="panel-body">
                <form method="POST" action="<?php echo site_url('admin/c_admin/tambah_lahan')?>" style="border-radius: 0px;" class="form-horizontal group-border-dashed"> 
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kecamatan</label>
                    <div class="col-sm-6">
                      <select class="form-control border-input selectpicker" name="kec">
                        <option value="1">Ajung</option>
                        <option value="2">Ambulu</option>
                        <option value="3">Arjasa</option>
                        <option value="4">Tanggul</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-6">
                      <input type="text" placeholder="Alamat Lahan" class="form-control" name="alamat">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon">Rp.</span>
                        <input type="number" class="form-control" name="harga">
                        <span class="input-group-addon">/m<sup>2</sup></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Luas</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                       <input type="number" class="form-control" name="luas">
                       <span class="input-group-addon">m<sup>2</sup></span>
                     </div>
                   </div>
                 </div>
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Ketinggian</label>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input type="number" class="form-control" name="ketinggian">
                      <span class="input-group-addon">mdpl</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Akses</label>
                  <div class="col-sm-6">
                    <select class="form-control border-input selectpicker" name="akses">
                      <option value="3">Baik</option>
                      <option value="2">Sedang</option>
                      <option value="1">Buruk</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Suhu</label>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input type="number" class="form-control border-input" name="suhu">
                      <span class="input-group-addon"><sup>o</sup>C</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-3 col-lg-offset-3">
                    <input type="submit" class="form-control btn-confirm-d btn-info btn-fill" value="Tambah" name="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/theme-floyd.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>
