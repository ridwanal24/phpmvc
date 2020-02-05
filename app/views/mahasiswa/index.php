<div class="container mt-4">
	<h1>Daftar Mahasiswa</h1>
	<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formTambah"> + Tambah</button>
	<div class="row">
		<div class="col-6">
			<ul class="list-group">
				<?php foreach($data['mahasiswa'] as $mhs): ?>
					<li class="list-group-item d-flex justify-content-between align-items-center"><?= $mhs['nama']; ?>
					<a class="badge badge-primary" href="<?= BASE_URL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" >Details</a>
				</li>
			<?php endforeach; ?>
		</ul>	
	</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahData">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form action="<?= BASE_URL; ?>mahasiswa/tambah" method="post">
					<div class="form-group col-12">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama">
					</div>
					<div class="form-group col-12">
						<label for="umur">Umur</label>
						<input type="number" class="form-control" id="umur" name="umur">
					</div>
					<div class="form-group col-12">
						<label for="pekerjaan">Pekerjaan</label>
						<input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>