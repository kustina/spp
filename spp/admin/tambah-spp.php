<h5>Halaman tambah Data SPP</h5>
<a href="?url=spp" class="btn btn-dark"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
	<div class="from-group mb-2">
		<label>Tahun</label>
		<input  type="number" name="tahun" maxlength="4" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Nominal</label>
		<input  type="number" name="nominal" maxlength="13" class="form-control" required>		
	</div>
	<div class="from-group">
		<button type="submit" class="btn btn-danger"> SIMPAN </button>
		<button type="reset" class="btn btn-success"> KOSONGKAN </button>
	</div>
</form>