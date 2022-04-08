<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - Frontend</title>
    <!-- Include Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

</head>

<style>
    .w-50 {
        width: 34% !important;
    }

    .w-5 {
        width: 10% !important;
    }

    .detail {
        margin-top: 16px;
    }

    .card-footer{
        border: none;
    }

    .chart{
        float: right !important;
        border: none;
        border-radius: 5px;
        background: linear-gradient(0deg,rgba(255,247,0,1) 0%, rgba(255,180,11,1) 100%);
        /* max-width: 30%; */
    }

    .item-response{
        border-radius: 10px;
        border: 1px solid #f1f2f6;
        box-shadow: 2px 2px 7px #f1f1f1;
    }

    .item-kategori{
        border-radius: 10px;
        border: 1px solid #f1f2f6;
    }

    .panel-kategori{
        border-radius: 10px;
        border: none;
        box-shadow: -4px 1px 45px 7px #f1f1f1;
    }

    .bg-transparent{
        border: none;
    }

    a{
        color: #48dbfb !important;
        text-decoration: none;
    }

    a:hover{
        color: aqua;
        cursor: pointer;
    }

    .price{
        margin-left: 10px;
        color: #e1e1e1;
    }

    .element-filter{
        padding-left: 5px;
        border: none;
        background-color: #fafafa;
        margin-left: 16px;
        border-radius: 5px;
        color: #414141;
        margin-bottom: 10px;
    }
    .nav-link{
        color: #414141 !important;
    }

    body{
        background-color: white !important;
    }

    .jumbotron{
        background: url('assets/img/doctor.png'),linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(84,178,197,1) 80%);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 70%;
        height: 350px;
        color: #181d5c;
    }

    .garis_vertikal{
        border-left: 1px #e1e1e1 solid;
        height: 30px;
        width: 0px;
    }

    .btn-default{
        background-color: #2f3542;
        color: #ced6e0 !important;
        margin: 2px;
    }

    ul,li{
        text-decoration-style: none !important;
        text-decoration: none;
    }

    .footer{
        background: linear-gradient(106deg, rgba(35,44,105,1) 0%, rgba(78,89,164,1) 100%);
        color: #ffffff;
        padding: 30px;
    }

    .bg-white{
        background-color: white !important;
    }

    .search{
        border: none;
        background-color: transparent;
        padding: 4px;
    }

    .img-kategori{
        max-width:36px
    }
    
    .text-kategori{
        margin-left: 30px;
        margin-top: 10px;
    }

    .label-card{
        background-color:#353f81;
        border-radius:30px 0px 25px 0px;
        width:100px;
        padding-left: 20px !important;
        color: white;
        font-weight: 600;
        font-size: 13px;
    }

    .bold{
        font-weight: bold;
    }

    .bg-doctor{
        background: url('assets/img/doctor.png');
        background-size: cover;
        background-repeat: no-repeat;
    }

    @media only screen and (max-width: 600px) {
        .item-kategori {
            width: 100px !important;
        }
        .img-kategori{
            display: none !important;
        }
        .text-kategori{
            font-size: 8px;
            margin-top: -1px;
            margin-left: -1px;
        }
        .media-kategori{
            height: 10px;
        }
        .w-50 {
            width: 8% !important;
        }
        .w-5 {
            width: 5% !important;
        }
        .jumbotron{
            background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(84,178,197,1) 80%);
            height: 350px;
            color: #181d5c;
        }
    }

</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" alt=""  style="width: 110px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gabung Mitra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bantuan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Lorem</a>
                        <a class="dropdown-item" href="#">Lorem</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Lorem</a>
                    </div>
                </li>
            </ul>
            <div class="row">
                <img src="assets/img/troli.png" style="max-width:20px;height: 20px;" class="mt-2 mr-2">
            
            <div class="garis_vertikal"></div>

            <img src="assets/img/profile.png" style="max-width:20px;height: 20px;" class="mt-2 ml-2">

            <li class="nav-item dropdown" style="list-style-type: none;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hai, Yusron
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Developer</a>
                </div>
            </li>
            </div>
            
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container mt-4">
            <h3>Apa Keluhanmu</h3>
            <h3 class="bold">Periksain Siap Membantu</h3>
            <p>
                Kami siap memberikan pelayanan terbaik untukmu <br>
                pilih layanan kesehatan sesuai kebutuhan
            </p>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Content Kategori -->
    <div class="container" style="margin-top: -70px;">
        <div class="row data">

            <!-- Kategori Pemeriksaan -->
            <div class="col-md-12 mb-5">
                <div class="card panel-kategori">
                    <div class="card-header bg-transparent">
                        <h5><strong>Kategori Pemeriksaan</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="owl-carousel">
                            <!-- Loop items -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Kategori Pemeriksaan -->

        </div>
    </div>
    <!-- End Content -->

    <!-- Filter -->
    <div class="container mb-3">

        <div class="row">
           <div class="col-md-4">
                <div class="media element-filter ml-0">
                    <img src="assets/img/option.png" style="max-width:20px" class="mt-2 mr-2">
                    <div class="media-body">
                        <h6 class=" mt-2">Urutkan</h6>
                    </div>
                </div>
           </div>
           <div class="col-md-4">
               
            <div class="media element-filter ml-0">
                <img src="assets/img/filter.png" style="max-width:20px" class="mt-2 mr-2">
                <div class="media-body">
                    <h6 class=" mt-2">Filter</h6>
                </div>
            </div>
           </div>
           <div class="col-md-4">
            <div class="media element-filter ml-0">
                <img src="assets/img/search.png" style="max-width:20px;" class="mt-2 mr-2">
                <div class="media-body">
                    <input type="text" class="form-control" placeholder="Cari Pemeriksaan">
                </div>
            </div>
           </div>
        </div>
    </div>
    <!-- End Filter -->

    <!-- Response -->
    <div class="container mb-5">
        <div class="row data-response">

        </div>
        <div class="row link-response">

        </div>
    </div>
    <!-- End Response -->

    <div class="modal-place"></div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Informasi</h5>
                    <ul>
                        <li style="list-style-type: none;margin-left: -40px;">Tentang Periksain</li>
                        <li style="list-style-type: none;margin-left: -40px;">Layanan</li>
                        <li style="list-style-type: none;margin-left: -40px;">Kontak</li>
                        <li style="list-style-type: none;margin-left: -40px;">Artikel & Berita</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Gabung Mitra</h5>
                    <ul>
                        <li style="list-style-type: none;margin-left: -40px;">Mitra Plebotomist</li>
                        <li style="list-style-type: none;margin-left: -40px;">Mitra Laboratorium</li>
                        <li style="list-style-type: none;margin-left: -40px;">Partner</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Pusat Bantuan</h5>
                    <ul>
                        <li style="list-style-type: none;margin-left: -40px;">+62 812-3867-772</li>
                        <li style="list-style-type: none;margin-left: -40px;">(031)999-220-22</li>
                    </ul>
                </div>
                <div class="col-md-3">

                    <h5>Available on</h5>
                    <img src="assets/img/availableon.png" style="margin-top:-25px;width:200px;margin-left:-10px" alt="">
                    
                    <h5>Metode Pembayaran</h5>
                    <img src="assets/img/pembayaran.png" style="width:130px" alt="">

                </div>
                <div class="col-md-12 mt-5">
                    <span>Copyright &copy; PT.Wahana Mediatek Indonesia. All Rights Reserverd</span>
                </div>
            </div>
        </div>
    </footer>

</body>
<!-- Include Jquery -->
<script src="assets/js/jquery-3.6.0.js"></script>

<!-- Owl -->
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel();
</script>

<!-- Jquery get json -->
<script src="assets/js/myJs.js"></script>

</html>