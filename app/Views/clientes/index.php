<?php echo view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php echo view('layout/navbar'); ?>



    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/usuarios'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titolo; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?php echo base_url('novocliente'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-user-plus"></i> Novo</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>status</th>
                                <th class="text-right no-sort">Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientes as $cliente) : ?>
                                <tr>
                                    <td> <?php echo  $cliente['id'] ?></td>
                                    <td> <?php echo  $cliente['fullname'] ?></td>
                                    <td> <?php echo  $cliente['email'] ?></td>
                                    <td> <?php echo  $cliente['status'] == '1' ? 'Liberado' : 'Proibido' ?></td>

                                    <td class="text-right">
                                        <a href="<?php echo base_url('clientes/clientes/edit/' . $cliente['id']); ?>" class="btn btn-sm  btn-primary"><i class="fa fa-user-edit"></i></a>
                                        <a href="#" class="btn btn-sm  btn-success"><i class="fas fa-eye"></i></a>
                                        <?php if ($cliente['status'] != '2 ||') : ?>
                                            <a href="#" class="btn btn-sm  btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <?php endif; ?>

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