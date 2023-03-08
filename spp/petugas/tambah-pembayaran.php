<?php
$nisn	=	$_GET['nisn'];
$kekurangan	=	$_GET['kekurangan'];
include '../koneksi.php';
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Pembayaran</h5>
<a href="?url=pembayaran" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-pembayaran&nisn=<?=$nisn;?>">
	<input name="id_spp"value="<?= $data['id_spp']?>" type="hidden"  class="form-control" required>
	<div class="from-group mb-2">
		<label>Nama Petugas</label>
		<input value="<?= $_SESSION['nama_petugas']?>" disabled class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>NISN</label>
		<input readonly name="nisn"value="<?= $data['nisn']?>"  class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Nama Siswa</label>
		<input value="<?= $data['nisn']?>" disabled class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Tanggal Bayar</label>
		<input type="date"  name="tgl_bayar" class="form-control" required>		
	</div>
	<div class="from-group mb-2">
		<label>Bulan Bayar</label>
		<select name="bulan_dibayar" class="form-control" required>
			<option value="">Pilih Bulan Dibayar</option>
			<option value="Januari">Januari</option>
			<option value="Februari">Februari</option>
			<option value="Maret">Februari</option>
			<option value="April">April</option>
			<option value="Mei">Mei</option>
			<option value="Juni">Juni</option>
			<option value="Juli">Juli</option>
			<option value="Agustus">Agustus</option>
			<option value="September">Agustus</option>
			<option value="Oktober">Oktober</option>
			<option value="November">November</option>
			<option value="Desember">Desember</option>
		</select>	
	</div>
	<div class="from-group mb-2">
		<label>Tahun Bayar</label>
		<select name="tahun_dibayar" class="form-control" required>
			<option value="">Pilih Tahun Dibayar</option>
			<?php 
			for ($i=2010; $i <=date('Y'); $i++) { 
				echo "<option value='$i'>$i</option>";
			}
			?>
		</select>
	</div>
	<div class="from-group mb-2">
		<label>Jumlah Bayar(Jumlah yang harus dibayar adalah <b><?=number_format($kekurangan,2,',','.'); ?></b>)</label>
		<input type="number" name="jumlah_bayar" max="<?= $kekurangan;?>" class="form-control" required>		
	</div>
	<div class="from-group">
		<button type="submit" class="btn btn-success"> SIMPAN </button>
		<button type="reset" class="btn btn-danger"> KOSONGKAN </button>
	</div>
</form>
