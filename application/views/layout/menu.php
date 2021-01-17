<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Catalog Otomotif</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/favorit') ?>">Favorit</a>
      </li>
    </ul>

    <form id="form_search" action="<?= base_url('home/cari') ?>" method="GET" class="form-inline my-2 my-lg-0">
      <input type="text" id="cari" name="cari" class="form-control" placeholder="Kata Kunci" required>
      <button type="submit" class="btn btn-success">Cari</button>
    </form>

  </div>
</nav>