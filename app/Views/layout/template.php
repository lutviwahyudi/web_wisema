<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT WIRA SELARAS MANUNGGAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets') ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets') ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">
                    <small class="me-3 text-white-50"><a href="https://maps.app.goo.gl/exiSgLCtHLfBbUyB6"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Center Point Tower BGF 50 Jl.Ahmad Yani Kav 20–Bekasi Selatan</small>
                    <small class="me-3 text-white-50"><a href="mailto:sales@wisema.id"><i class="fas fa-envelope me-2 text-secondary"></i></a>Sales Email</small>
                    <small class="me-3 text-white-50"><a href="mailto:admin@wisema.id"><i class="fas fa-envelope me-2 text-secondary"></i></a>Admin Email</small>
                    <small class="me-3 text-white-50"><a href="mailto:Support@wisema.id"><i class="fas fa-envelope me-2 text-secondary"></i></a>Support Email</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <?= $this->include('layout/navbar') ?>
    <?php if (uri_string() == ''): ?>
        <div class="container-fluid blog py-5 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Blog</h5>
                    <h1>Latest Blog & News</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <?php foreach ($blogs as $blog): ?>
                        <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                            <div class="blog-item position-relative bg-light rounded">
                                <img src="<?= base_url('uploads/') . $blog['img'] ?>" class="img-fluid w-100 rounded-top" alt="">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <a href="#" class="btn btn-secondary px-3 rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#readMoreModal-<?= $blog['id'] ?>">Read More</a>
                                </div>
                                <div class="blog-content text-center position-relative px-3" style="margin-top: 30px;">
                                    <h4><?= $blog['judul'] ?></h4>
                                    <span class="text-secondary"><?= date('d M Y', strtotime($blog['date'])) ?></span>
                                    <p class="py-2"><?= substr($blog['deskripsi'], 0, 100) ?>...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="readMoreModal-<?= $blog['id'] ?>" tabindex="-1" aria-labelledby="readMoreModalLabel-<?= $blog['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="readMoreModalLabel-<?= $blog['id'] ?>">Detail Berita</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><?= $blog['deskripsi'] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?= $this->renderSection('content'); ?>
    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <a href="index.html">
                        <h1 class="text-white fw-bold d-block">PT Wira Selaras Manunggal</h1>
                    </a>
                    <p class="mt-4 text-light">Sukses sudah pasti menjadi harapan
                        dan Impian semua Orang , namun
                        untuk mecapai kesuksesan harus
                        diiringi dengan kerja keras , kegigihan ,
                        keuletan , semangat dan pantang
                        menyerah.</p>
                    <div class="d-flex hightech-link">
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="https://www.instagram.com/wiraselarasmanunggal?utm_source=qr&igsh=cHpjd3c5d2RmNGgx" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="http://www.linkedin.com/in/wira-selaras-manunggal-4b2a35322" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="https://maps.app.goo.gl/exiSgLCtHLfBbUyB6" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Center Point Tower BGF 50 Jl.Ahmad Yani
                            Kav 20–Bekasi Selatan</a>
                        <a href="https://wa.me/+6287832484138?text=Apakah boleh saya bertanya tentang produk anda ?" class="py-3 text-light border-bottom border-primary"><i class="fab fa-whatsapp text-secondary me-2"></i>+62 878-3248-4138</a>
                        <a href="mailto:Support@wisema.id" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i>Support Email</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Wisema</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <span class="text-light">Designed By<a href="" class="text-secondary"> Bogagol_Jasa</a> Distributed By <a href="https://www.instagram.com/wiraselarasmanunggal?utm_source=qr&igsh=cHpjd3c5d2RmNGgx" class="text-secondary">PT Wira Selaras Manunggal</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets') ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets') ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets') ?>/js/main.js"></script>
</body>

</html>