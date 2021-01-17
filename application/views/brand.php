<div class="container">
  <center><h2 class="mt-4">Brand Mobil</h2></center>
<div class="row">

    <?php foreach($brand as $brand) { ?>
        <div class="col-md-4 mt-4 mx-auto mb-4">
            <a class="list" href="<?= base_url('home/varian/'.$brand->id_brand) ?>">
                <div class="card mb-4" style="width: 20rem;">  
                    <img class="card-img-top" src="<?=base_url('assets/image/'.$brand->gambar_brand)?>" alt="<?= $brand->nama_brand ?>" height="170"> 
                    <div class="card-body">
                      <h2 class="text-center"><?= $brand->nama_trademark."<br/>".$brand->nama_brand ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
</div>