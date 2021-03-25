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


					<form method="post" name="frmEdit" action="<?php echo base_url('Admin/clientes/update'); ?>">
						<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $employee['id'] ?>">
						<div class="form-group">
							<label>Fullname</label>
							<input type="text" class="form-control" name="txtFullname" value="<?php echo $employee['fullname']; ?>">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="txtPassword" value="<?php echo $employee['password']; ?>">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="txtEmail" value="<?php echo $employee['email']; ?>">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" class="form-control" name="txtPhone" value="<?php echo $employee['phone']; ?>">
						</div>
						<div class="form-group">
							<label>Adress</label>
							<input type="text" class="form-control" name="txtAdress" value="<?php echo $employee['adress']; ?>">
						</div>
						<div class="form-group">
							<label>Status</label>
							<input type="text" class="form-control" name="txtStatus" value="<?php echo $employee['status']; ?>">
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