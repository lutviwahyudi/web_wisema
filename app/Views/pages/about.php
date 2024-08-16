<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="<?= base_url('assets') ?>/img/about-2.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="<?= base_url('assets') ?>/img/logo.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">Tentang Kami</h5>
                <h1 class="mb-4">PT Wira Selaras Manunggal</h1>
                <p>PT. Wira Selaras Manunggal adalah perusahaan yang bergerak dibidang Teknologi Informasi
                    ,khususnya dalam penyediaanjasa IT Konsultandan System Integrasi.
                    Dalam setiap pelayanan , kami selalu menjunjung tinggi kepuasan para pelanggan kami dengan
                    mengedepankankeju-jurandan dedikasi yangtinggi untuksetiap pelayanan.
                    Dengan kemampuan yang kami miliki dibidang Teknologi Informasi tentunya kami akan terus
                    mengembangkan diri untuk menjadi pelopor dalam memberikan solusi terbaik bagi client-client
                    kami.</p>
                <p class="mb-4">Kolaborasi dari team kami , yang mempunyai pengalaman lebih dari 10 Tahun dalam membangun
                    jaringan maupun networking system. Akan memberikan pengalaman yang lebih baik dan menjadikan
                    kami salah satu team yangharusdiperhitungkandi lingkunganperusahaanIT Integrator.</p>
                <h5>Misi</h5>
                <p class="mb-4"> Mampu memberikan solusi terbaik demi
                    tercapainya kepuasan pelanggan . Terus
                    melakukan Inovasi sebagai perusahaan
                    Teknologi Informasi terdepan.</p>
                <h5>Visi</h5>
                <p class="mb-4"> Menjadi perusahaan di bidang Teknologi
                    Informasi
                    yang mampu memberikan
                    layanan dan kepuasan pelanggan dengan
                    pelayananterbaik.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<?= $this->endSection(); ?>