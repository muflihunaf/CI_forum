<div id="wrapper">
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">
			<div class="container-fluid">
			<?= $this->session->flashdata('message'); ?>
				<h1 class="h3 mb-2 text-gray-800">Lihat Laporan</h1>
				<div class="card shadow mb-2">
					<div class="card-header py-3">
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>judul</th>
										<th>tanggal</th>
										<th>status</th>
                                        <th>Nama Pengirim</th>
                                        <td>Opsi</td>
									</tr>
								</thead>
								<?php $no = 0; ?>
								<tbody>
									<?php foreach ($laporan as $item) { ?>
									<tr>
										<td><?= ++$no ?></td>
										<td><?= $item['judul']; ?> </td>
										<td><?= $item['tanggal']; ?> </td>
										<td><?= $item['status']; ?> </td>
                                        <td><?= $item['nama']; ?> </td>
                                        <td><a class="btn btn-primary" href="<?= base_url('forum/index/'.$item['id_keluhan']) ?>">Lihat</a>
                                        <a class="btn btn-success" href="<?= base_url('admin/editStatus/'.$item['id_keluhan']) ?>">Edit Status</a>

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
<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Ubah Status</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="<?= base_url('admin/ubahLaporan/'.$item['id_keluhan']); ?>" method="POST">
					<div class="form-group">
						<label for="kategori">status:</label>
						<select name="status" id="" class="form-control">
                            <option value="belum ditindak lanjutin">belum ditindak lanjutin</option>
                            <option value="diproses">diproses</option>
                            <option value="selesai">selesai</option>
                        </select>
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