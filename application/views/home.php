<div id="showcase">
    <div class="container">
      <h1>Catalog Mobil.</h1>
      <h2>Cari Mobil keren, mewah dengan harga yang sangat pas dikantong sesuai dengan impian Anda .</h2>
    </div>
</div>
     
<div class="container">
    <center><h2 class="mt-4">Trade Mark</h2></center>
    <hr>
<div class="row">
    <?php foreach ($trademark as $trademark) { ?>
        <div class="col-md-4 mt-4 mx-auto mb-4">
            <a class="list" href="<?= base_url('home/brand/'.$trademark->id_trademark) ?>">
                <div class="card mb-4" style="width: 20rem;">  
                    <img class="card-img-top" src="<?=base_url('assets/image/'.$trademark->gambar_trademark)?>" alt="<?= $trademark->nama_trademark ?>" height="170"> 
                    <div class="card-body">
                    	<h2 class="text-center"><?= $trademark->nama_trademark ?></h2>
                    </div>
                </div>
            </a>
        </div>
    <?php } ?>
</div>
</div>
