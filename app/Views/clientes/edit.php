<?php echo view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php echo view('layout/navbar'); ?>



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
                <form>
                    <?php foreach ($clientes as $cliente) : ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text" class="form-control" value="<?php echo $cliente['name']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" value="<?php echo $cliente['email']; ?>">

                        </div>

                        <div class="form-group">
                            <label>Estado</label>

                            <select class="custom-select" name="perfil_usuario">
                                <option value="1" <?php echo 2 ? 'selected' : '' ?>>Ativo</option>
                                <option value="2" <?php echo 1 ? 'selected' : '' ?>>Inativo</option>
                            </select>
                        </div>

                 

                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->