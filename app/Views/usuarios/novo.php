<?php echo view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php echo view('layout/navbar'); ?>



    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titolo; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?php echo base_url('usuarios'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-arrow-left"></i> Voltar</a>
            </div>
            <div class="card-body">
                <form>
              
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Aaddress</label>
                            <input type="email" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone</label>
                            <input type="email" class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Estado</label>

                            <select class="custom-select" name="perfil_usuario">
                                <option value="1" <?php echo 2 ? 'selected' : '' ?>>Ativo</option>
                                <option value="2" <?php echo 1 ? 'selected' : '' ?>>Inativo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Perfil de acesso</label>

                            <select class="custom-select" name="perfil_usuario">
                                <option value="1" <?php echo 2 ? 'selected' : '' ?>>Administrador</option>
                                <option value="2" <?php echo 1 ? 'selected' : '' ?>>Supervisor</option>
                                <option value="1" <?php echo 2 ? 'selected' : '' ?>>Vendedor</option>

                            </select>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
              
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->