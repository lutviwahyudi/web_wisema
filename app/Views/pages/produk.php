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
                        <a href="<?= base_url('uploads/' . $product['img']) ?>">
                            <img src="<?= base_url('uploads/' . $product['img']) ?>" class="card-img-top" alt="<?= $product['nama'] ?>" style="height: 150px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 16px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%"><?= $product['nama'] ?></h5>
                            <p class="card-text" style="font-size: 14px; margin-bottom: 5px;">Harga : Rp. <?= $product['harga'] ?></p>
                            <p class="card-text" style="font-size: 14px; margin-bottom: 5px;">Diskon : <?= $product['diskon'] ?>%</p>
                            <?php
                            $harga = $product['harga'];
                            $diskon = $product['diskon'];
                            $subtotal = $harga - ($harga * $diskon / 100);
                            ?>
                            <p class="card-text" style="font-size: 14px; margin-bottom: 5px;">Subtotal : <?= $subtotal ?></p>
                            <a href="https://wa.me/+6287832484138?text=Apakah produk <?= urlencode($product['nama']) ?> dengan spesifikasi <?= urlencode($product['deskripsi']) ?> masih tersedia tidak?"><button type="button" class="btn-success">Order</button></a>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal-<?= $product['id'] ?>">Info</button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-<?= $product['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $product['nama'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('uploads/' . $product['img']) ?>" alt="<?= $product['nama'] ?>" class="img-fluid" style="height: auto; width: 100%; object-fit: cover;">
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            <?= $product['deskripsi'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Services End -->
<?= $this->endSection() ?>