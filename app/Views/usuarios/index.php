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
                <a href="<?php echo base_url('novo'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-user-plus"></i>  Novo</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuário</th>
                                <th>role</th>
                                <th>status</th>
                                <th class="text-right no-sort">Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $user) : ?>
                                <tr>
                                    <td> <?php echo  $user['id'] ?></td>
                                    <td> <?php echo  $user['username'] ?></td>
                                    <td> <?php echo  $user['name'] ?></td>
                                    <td> <?php echo  $user['status'] == '1' ? 'Liberado' : 'Proibido' ?></td>
                                    <td class="text-right">
                                        <a href="<?php echo base_url('usuarios/edit/' . $user['id']); ?>" class="btn btn-sm  btn-primary"><i class="fa fa-user-edit"></i></a>
                                        <a href="#" class="btn btn-sm  btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a href="#" class="btn btn-sm  btn-success"><i class="fas fa-eye"></i></a>


                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->