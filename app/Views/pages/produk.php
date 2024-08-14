<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<!-- Services Start -->
<div class="container services py-5 mb-5">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
        <h5 class="text-primary">Produk unggulan kami</h5>
        <h1>Laptop, Pc server dan lain-lainnya</h1>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($produk as $product): ?>
                <div class="col-md-2" style="margin: 5px 35px 35px 35px;">
                    <div class="card" style="width: 15rem; height: 350px; overflow: hidden;">
                        <img src="<?= base_url('uploads/' . $product['img']) ?>" class="card-img-top" alt="<?= $product['nama'] ?>" style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 16px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%"><?= $product['nama'] ?></h5>
                            <p class="card-text" style="font-size: 14px; margin-bottom: 5px;">Harga : Rp. <?= $product['harga'] ?></p>
                            <p class="card-text" style="font-size: 14px; margin-bottom: 5px;">Diskon : <?= $product['diskon'] ?>%</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Services End -->
<?= $this->endSection() ?>