<div class="row">
<div class="col-lg-12">

<div class="panel panel-default">
<div class="panel-body">
	<h2 class="mt-3 text-center"><?=$title?></h2>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>gambar</th>
            <th>Nama Trade Mark</th>
            <td>Nama Varian</td>
            <th width="20%">Actions</th>
        </tr>
    </thead>
    <tbody>

    	<?php foreach ($mobil as $mobil) { ?>
        <tr>
            <td><img src="<?= base_url('assets/image/'.$mobil->gambar_varian) ?>" class="img img-thumbnail" width="60"></td>
            <td><?= $mobil->nama_trademark; ?></td>
            <td><?= $mobil->nama_varian; ?></td>
            <td>
            <a href="<?= base_url('home/spesifikasi/'.$mobil->id_varian) ?>" class="btn btn-primary btn-sm">Lihat Spesifikasi</a>
            </td>
        </tr>

        <?php } ?>

    </tbody>
</table>

</div>
</div>

</div>
</div>