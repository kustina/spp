<h5>Halaman tambah Petugas</h5>
<a href="?url=petugas" class="btn btn-dark"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-petugas">
	<div class="from-group mb-2">
		<label>Username</label>
		<input  type="text" name="username" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Password</label>
		<input  type="text" name="password" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Nama Petugas</label>
		<input  type="text" name="nama_petugas" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Level</label>
		<select name="level" class="form-control" required>
			<option value="">Pilih Level</option>
			<option value="admin">Admin</option>
			<option value="petugas">Petugas</option>
		</select>
	</div>
	<div class="from-group">
		<button type="submit" class="btn btn-danger"> SIMPAN </button>
		<button type="reset" class="btn btn-success"> KOSONGKAN </button>
	</div>
</form>