<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Project Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Project</h5>
            <h1>Project team</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="<?= base_url('assets') ?>/img/1a.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">INFRASTRUKTUR & DATA CENTER</h4>
                                <p class="m-0 text-white">Membangun IT Infrastruktur</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="<?= base_url('assets') ?>/img/2a.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Networking Configuration</h4>
                                <p class="m-0 text-white">Instalasi CCTV</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="<?= base_url('assets') ?>/img/3.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Cyber Security</h4>
                                <p class="m-0 text-white">Anti Virus System</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->
<?= $this->endSection() ?>