<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="<?= base_url('pages/save') ?>" method="post" enctype="multipart/form-data" class="w-50"> <?= csrf_field() ?>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk</label>
            <input type="text" class="form-control" id="harga" name="harga" required placeholder="2000000" style="opacity: 0.5;">
        </div>
        <div class="mb-3">
            <label for="diskon" class="form-label">Diskon</label>
            <input type="text" class="form-control" id="diskon" name="diskon" required placeholder="10" style="opacity: 0.5;">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Photo</label>
            <input class="form-control" type="file" id="formFile" name="foto" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?= $this->endSection() ?>