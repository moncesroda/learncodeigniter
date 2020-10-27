<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>"  class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mt-2"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><b>Penulis : <?= $komik['penulis']; ?></b></p>
                            <p class="card-text"><b>Penerbit : <?= $komik['penerbit']; ?></b></p>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                            <div>
                                <a href="/komik" class="btn btn-primary mt-2 btn-sm">kembali ke halaman komik</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>