    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.html" class="navbar-brand">
                    <h5 class="text-white fw-bold d-block">PT Wira Selaras Manunggal</span></h5>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="<?= base_url() ?>" class="nav-item nav-link active text-secondary">Home</a>
                        <a href="<?= base_url('pages/about') ?>" class="nav-item nav-link">About</a>
                        <a href="<?= base_url('pages/service') ?>" class="nav-item nav-link">Services</a>
                        <a href="<?= base_url('pages/projects') ?>" class="nav-item nav-link">Projects</a>
                        <a href="<?= base_url('pages/produk') ?>" class="nav-item nav-link">Produk</a>
                        <a href="<?= base_url('pages/jualProduk') ?>" class="nav-item nav-link">Jual Produk</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets') ?>/img/carousel-1.jpg" class="img-fluid" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Layanan Service Kompoter</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Servis Komputer Profesional dan Terpercaya</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Solusi cepat dan terpercaya untuk semua kebutuhan servis komputer Anda!</p>
                            <a href="https://wa.me/+6287832484138?text=Apakah boleh saya bertanya tentang produk anda ?" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Chat Via WhatsApp</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets') ?>/img/3a.jpg" class="img-fluid" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Jual Beli Perangkat Komputer</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Solusi Jual Beli Perangkat Komputer Berkualitas!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Temukan perangkat komputer berkualitas terbaik untuk kebutuhan Anda di sini. Kami menawarkan layanan jual beli dengan harga kompetitif dan jaminan kepuasan pelanggan.</p>
                            <a href="https://wa.me/+6287832484138?text=Apakah boleh saya bertanya tentang produk anda ?" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Chat Via WhatsApp</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Fact Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container text-center">
            <div class="row">
                <h3 class="text-white">Total Pengunjung <span id="visitor"></span></h3>
            </div>
        </div>
    </div>
    <!-- Fact end -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil jumlah pengunjung dari localStorage
            let visitorCount = localStorage.getItem('visitorCount');

            // Jika elemen #visitor ada di halaman, tampilkan hitungan pengunjung
            if (document.getElementById('visitor')) {
                document.getElementById('visitor').innerText = visitorCount ? visitorCount : 0;
            }

            // Periksa apakah pengguna berada di halaman home dengan memeriksa URL
            if (window.location.pathname === '/wisenma/wisenma/public/' || window.location.pathname === '/wisenma/wisenma/public/') {
                // Jika belum ada, inisialisasi dengan 0
                if (visitorCount === null) {
                    visitorCount = 0;
                }

                // Tingkatkan hitungan pengunjung
                visitorCount++;

                // Simpan hitungan pengunjung baru ke localStorage
                localStorage.setItem('visitorCount', visitorCount);

                // Perbarui hitungan pengunjung di halaman jika elemen #visitor ada
                if (document.getElementById('visitor')) {
                    document.getElementById('visitor').innerText = visitorCount;
                }
            }
        });
    </script>