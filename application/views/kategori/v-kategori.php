<div id="wrapper">
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">
			<div class="container-fluid">
			<?= $this->session->flashdata('message'); ?>
				<!-- Page Heading -->
				<h1 class="h3 mb-2 text-gray-800">Lihat Kategori</h1>
				<div class="card shadow mb-2">
					<div class="card-header py-3">
						<!-- <h6 class="m-0 font-weight-bold text-primary">Kategori</h6> -->
						<button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Tambah
							Data</button>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<?php $no = 0; ?>
								<tbody>
									<?php foreach ($kategori as $item) { ?>
									<tr>
										<td><?= ++$no ?></td>
										<td><?= $item['nama']; ?> </td>
										<td width="200px" >
										<a class="btn btn-primary" href="<?= base_url('admin/EditKategori/'. $item['id_kategori'])?>">Edit</a>
										<a class="btn btn-danger" onclick="return confirm('Anda Yakin?'); " href="<?= base_url('admin/hapusKategori/'. $item['id_kategori'])?>">Hapus</a>
									 </td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Tambah Kategori</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?= base_url('admin/simpan_kategori'); ?>" method="POST">
					<div class="form-group">
						<label for="kategori">Nama Kategori:</label>
						<input type="text" class="form-control" placeholder="Nama Kategori" name="kategori" required>
					</div>

			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>