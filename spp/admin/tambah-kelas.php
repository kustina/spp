<h5>Halaman tambah Data Kelas</h5>
<a href="?url=kelas" class="btn btn-dark"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-kelas">
	<div class="from-group mb-2">
		<label>Nama Kelas</label>
		<input  type="text" name="nama_kelas" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Kompetensi Keahlian</label>
		<input  type="text" name="kompetensi_keahlian" class="form-control" required>		
	</div>
	<div class="from-group">
		<button type="submit" class="btn btn-danger"> SIMPAN </button>
		<button type="reset" class="btn btn-success"> KOSONGKAN </button>
	</div>
</form>