<div class="container">
	<div class="row">
		<div class="card col-md-6 offset-md-3">
			<div class="card-header">
				<h2>Edit Kategori</h2>
			</div>
			<div class="card-body">
				<form action="<?= base_url('admin/EditKategori/').$kategori['id_kategori'] ?>" method="POST">
					<div class="form-group">
                        <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori'] ?>">
						<label >Nama:</label>
						<input type="text" class="form-control" id="uname" placeholder="Nama Kategori" name="kategori"
							value="<?= $kategori['nama'] ?>" required>
						<div class="valid-feedback">Valid.</div>
						<div class="invalid-feedback">Please fill out this field.</div>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
