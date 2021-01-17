<div class="container">
  <center><h2 class="mt-4">Varian Mobil</h2></center>
<div class="row">

    <?php foreach($varian as $varian) { ?>
        <div class="col-md-4 mt-4 mx-auto mb-4">
            <a class="list" href="">
                <div class="card mb-4" style="width: 20rem;">  
                    <img class="card-img-top" src="<?=base_url('assets/image/'.$varian->gambar_varian)?>" alt="<?= $varian->nama_varian ?>" height="200"> 
                    <div class="card-body">
                      <h2 class="text-center"><?= $varian->nama_varian ?></h2>
                      <hr>
                      <center>

                        <?php if($varian->status == 1) { ?>
                          <a href="<?=base_url();?>home/status/<?=$varian->id_brand;?>/2/<?=$varian->id_varian;?>" class="btn btn-lg" onclick="alert('Data di hapus dari daftar favorit')"><i class="fas fa-heart fa-lg" style="color:red;"></i></a>
                        <?php } else { ?>
                          <a href="<?=base_url();?>home/status/<?=$varian->id_brand;?>/1/<?=$varian->id_varian;?>" class="btn btn-lg" onclick="alert('Data di tambah ke daftar favorit')"><i class="far fa-heart fa-lg" style="color:red;"></i></a>
                        <?php } ?>

                      <a href="<?= base_url('home/spesifikasi/'.$varian->id_varian) ?>" class="btn btn-lg"><i class="far fa-eye fa-lg"></i></a>
                      </center>

                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
</div>