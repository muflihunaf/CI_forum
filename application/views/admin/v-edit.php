<div class="container">
	<div class="row">
		<div class="card col-md-6 offset-md-3">
			<div class="card-header">
				<h2>Edit Status</h2>
			</div>
			<div class="card-body">
				<form action="<?= base_url('admin/editStatus/').$laporan['id_keluhan'] ?>" method="POST">
					<div class="form-group">
                        <input type="hidden" name="id_kategori" value="<?= $laporan['id_keluhan'] ?>">
						<label >Status:</label>
						<select name="status" id="" class="form-control">
                            <option value="belum ditindak lanjutin">belum ditindak lanjutin</option>
                            <option value="diproses">diproses</option>
                            <option value="selesai">selesai</option>
                        </select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>
