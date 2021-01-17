<center><h2 class="mt-2"></i> Spesifikasi </h2></center>
<hr />
<div class="row">
	<div class="col-md-4">
		<!-- gambar -->
		<img src="<?= base_url('assets/image/'. $spek->gambar_varian); ?>" class="img img-thumbnail" alt="Produk">
	</div>
	<div class="col-md-8">
		<!-- detail item -->
		<table class="table table-bordered table-striped" style="min-height: 300px">
			<tr>
				<td style="width:30%; text-align: right; vertical-align: top">Nama :</td>
				<td><?= ucfirst($spek->nama_varian); ?></td>
			</tr>
			<tr>
				<td style="width:30%; text-align: right; vertical-align: top">Harga :</td>
				<td><?= number_format($spek->harga, 0, ',', '.'); ?></td>
			</tr>
			<tr>
				<td style="width:30%; text-align: right; vertical-align: top">Tinggi (mm) :</td>
				<td><?= ucfirst($spek->tinggi); ?></td>
			</tr>
			<tr>
				<td style="width:30%; text-align: right; vertical-align: top">Konfigurasi Mesin :</td>
				<td><?= $spek->konfigurasi_mesin ?></td>
			</tr>
			<tr>
				<td style="width:30%; text-align: right; vertical-align: top">Audio / Hiburan :</td>
				<td><?= ucfirst(nl2br($spek->hiburan)); ?></td>
			</tr>
		</table>
		<br />
		<button type="button" class="btn btn-danger mb-2 mx-auto" onclick="window.history.go(-1)"> Kembali</button>
		
	</div>
</div>