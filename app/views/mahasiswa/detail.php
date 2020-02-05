<div class="container">
	<div class="card">
		<h5 class="card-header">Detail Mahasiswa</h5>
		<div class="card-body">
			<h5 class="card-title"><?= $data['mahasiswa']['nama']; ?></h5>
			<p class="card-text"><?= $data['mahasiswa']['umur']; ?> tahun</p>
			<p class="card-text"><?= $data['mahasiswa']['pekerjaan']; ?></p>
			<a href="<?= BASE_URL; ?>mahasiswa" class="btn btn-primary">Back</a>
		</div>
	</div>
</div>