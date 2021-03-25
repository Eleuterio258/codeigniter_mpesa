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
				<a href="<?php echo base_url('create'); ?>" class="btn btn-sm  btn-success float-right"><i class="fas fa-user-plus"></i> Novo</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered dataTable" width="100%" cellspacing="0">

						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Telephone</th>
							<th>Action</th>
						</tr>
						<?php
						foreach ($employees_detail as $sd) {
						?>
							<tr>
								<td><?php echo $sd['id']; ?></td>
								<td><?php echo $sd['fullname']; ?></td>
								<td><?php echo $sd['phone']; ?></td>
								<td class="text-right">
									<a href="<?php echo base_url('admin/clientes/edit/' . $sd['id']); ?>" class="btn btn-sm  btn-primary"><i class="fa fa-user-edit"></i></a>
									<a href="#" class="btn btn-sm  btn-success"><i class="fas fa-eye"></i></a>
									<a href="<?php echo base_url('admin/clientes/delete/' . $sd['id']); ?>" class="btn btn-sm  btn-danger"><i class="fas fa-trash-alt"></i></a>
								</td>

								</td>
							</tr>

						<?php
						}
						?>

					</table>

				</div>
			</div>

		</div>
	</div>
</div>