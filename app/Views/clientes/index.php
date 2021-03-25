 <!-- Begin Page Content -->
 <div class="container-fluid">
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?php echo base_url('admin/clientes'); ?>">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page"><?= $titolo ?></li>
         </ol>
     </nav>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a href="<?php echo base_url('create'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-user-plus"></i> Novo</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Id1</th>
                             <th>Nome</th>
                             <th>Celular</th>
                             <th class="text-right no-sort">Ações</th>
                         </tr>
                     </thead>
                     <?php
                        foreach ($employees_detail as $sd) { ?>
                         <tbody>
                             <tr>
                                 <td><?php echo $sd['id']; ?></td>
                                 <td><?php echo $sd['fullname']; ?></td>
                                 <td><?php echo $sd['phone']; ?></td>
                                 <td class="text-right">
                                     <a href="<?php echo base_url('admin/clientes/edit/' . $sd['id']); ?>" class="btn btn-sm  btn-primary" title="Edit"><i class="fa fa-user-edit"></i></a>
                                     <a href="#" class="btn btn-sm  btn-success" title="View"><i class="fas fa-eye"></i></a>
                                     <a href="<?php echo base_url('admin/clientes/delete/' . $sd['id']); ?>" class="btn btn-sm  btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                 </td>
                             </tr>
                         </tbody>
                     <?php
                        }
                        ?>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->