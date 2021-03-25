<!-- Main Content -->
<div id="content">




  <!-- Begin Page Content -->
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $titolo; ?></li>
      </ol>
    </nav>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="<?php echo base_url('clientes'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-arrow-left"></i> Voltar</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">

          <form method="post" name="frmAdd" action="<?php echo site_url('Admin/clientes/store'); ?>">

            <div class="form-group">
              <label>Fullname</label>
              <input type="text" class="form-control" name="txtFullname" ?>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="txtPassword" ?>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="txtEmail" ?>
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input type="text" class="form-control" name="txtPhone" ?>
            </div>
            <div class="form-group">
              <label>Adress</label>
              <input type="text" class="form-control" name="txtAdress" ?>
            </div>

            <div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>