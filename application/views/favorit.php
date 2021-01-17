<h4 class="text-center mt-3">Data Mobil Favorit</h4>
<br />
<?php
//Notifikasi
if($this->session->flashdata('sukses')){
  echo '<center>';
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
  echo '</center>';
}
?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<td class="text-center"><b>No</b></td>
				<td class="text-center"><b>Gambar</b></td>
				<td class="center"><b>Nama</b></td>
				<td class="text-center"><b>Opsi</b></td>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i = 1;
				foreach ($favorit as $favorit) { ?>
			<tr>
				<td class="text-center"><?= $i++; ?></td>
				<td class="text-center"><img class="img img-thumbnail" src="<?=base_url('assets/image/'.$favorit->gambar_varian)?>" height="100" width="100"></td>
				<td class="text-center"><?= $favorit->nama_varian ?></td>
				<td class="text-center">
				 <a href="<?= base_url('home/spesifikasi/'.$favorit->id_varian) ?>" class="btn btn-primary btn-sm"><i class="far fa-eye fa-lg"></i></a>	
				<a href="<?= base_url('home/favorit_update/'.$favorit->id_varian) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus item ini dari daftar favorit anda ?')"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>