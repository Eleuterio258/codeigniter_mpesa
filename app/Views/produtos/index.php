
<?php echo view('layout/sidebar'); ?>

<!-- Main Content -->
<div id="content">

    <?php echo view('layout/navbar'); ?>



    <!-- Begin Page Content -->
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('produtos'); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titolo; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?php echo base_url('novoproduto'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-user-plus"></i> Novo</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                 <th>Id</th>
                                 <th>Nome</th>
                                 <th>Descricao</th>
                                 <th>Prece</th>
                                 <th>Acao</th>
                             </tr>
                        </thead>
                       <tbody>
                              <?php if($product): ?>
                              <?php foreach($product as $product): ?>
                              <tr>
                                 <td><?php echo $product['id']; ?></td>
                                 <td><?php echo $product['name']; ?></td>
                                 <td><?php echo $product['description']; ?></td>
                                 <td><?php echo $product['price']; ?></td>
                             
                                  <td class="text-right">
                                        <a href="<?php echo base_url('admin/produtos/edit/' . $product['id']); ?>" class="btn btn-sm  btn-primary"><i class="fa fa-user-edit"></i></a>
                                        <a href="#" class="btn btn-sm  btn-success"><i class="fas fa-eye"></i></a>
                                        <?php if ($product['status'] != '2 ||') : ?>
                                            <a href="#" class="btn btn-sm  btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <?php endif; ?>

                                    </td>
                              </tr>
                             <?php endforeach; ?>
                             <?php endif; ?>
                       </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>






