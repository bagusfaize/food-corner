<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Corner</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container">
    <a class="navbar-brand" href="#"><img class="m-0" src="img/makanaja-02.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-1 active">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-1">
            <a class="nav-link" href="#">Kategori</a>
        </li>
        <li class="nav-item mx-1">
            <a class="nav-link" href="#">Promo</a>
        </li>
        <li class="nav-item mx-1">
        <a class="nav-link" href="admin/index.php">Login</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>
    <!-- CONTENT -->
    <div class="container content">
        <div class="row">
            <div class="col-sm-12 col-lg-8 mb-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner rounded ">
                <div class="carousel-item active">
                <img class="d-block w-100" src="img/banner1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="img/banner2.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="mini-banner col-6 col-lg-12"><a href="mobile-app.html"><img src="img/download-app.png" class="rounded"></a></div>
                    <div class="mini-banner col-6 col-lg-12"><a href="#"><img src="img/delivery.png" class="rounded"></a></div>
                </div>
            </div>
        </div>
        <div class="row text-center sortir">
            <div class="col"><a href="#"><i class="fab fa-hotjar"></i><br>Lagi Trending</a></div>
            <div class="col"><a href="#"><i class="fas fa-heart"></i><br>Paling disukai</a></div>
            <div class="col"><a href="#"><i class="fas fa-clock"></i><br>Terakhir dipesan</a></div>
            <div class="col"><a href="#"><i class="fas fa-eye"></i><br>Banyak dilihat</a></div>
        </div>
    </div>

    
    <!-- MENU MAKANAN -->
    <div class="container block-menu">
        <h1 class="section-title">Menu Makanan</h1>
    <div class="row justify-content-around">
        <?php
        include "koneksi.php";

        $query_makanan = "SELECT * from menu where kategori like '%makanan%'";

        $makanan = mysqli_query($connect, $query_makanan);

        while($data = mysqli_fetch_array($makanan)){
            echo"
            <div class='item-card col-5 col-sm-4 col-md-3 col-lg-2 bg-white mx-1 mb-5 pointer zoom'>
            <div class='item-img'>
                <img src='img/".$data['gambar']."' class='img-thumbnail border-0'>
            </div>
            <div class='item-details'>
                <h6 class='text-danger font-weight-bold'>".$data['nama']."</h6>
                <p class='text-secondary desc mb-1'>".$data['deskripsi']."</p>
            </div>
            <div class='item-price'>
                <h7 class='harga'>".$data['harga']."</h7>
            </div>
            <div class='tambah btn-danger p-1 my-3 text-center align-bottom'>Pesen</div>
        </div>
        ";}

        ?>
    <!-- MENU MINUMAN -->
    <div class="container block-menu">
        <h1 class="section-title">Menu Minuman</h1>
    <div class="row justify-content-around">
        <?php
        include "koneksi.php";

        $query_minuman = "SELECT * from menu where kategori like '%minuman%'";

        $minuman = mysqli_query($connect, $query_minuman);

        while($data = mysqli_fetch_array($minuman)){
            echo"
            <div class='item-card col-5 col-sm-4 col-md-3 col-lg-2 bg-white mx-1 mb-5 pointer zoom'>
            <div class='item-img'>
                <img src='img/produk/".$data['gambar']."' class='img-thumbnail border-0'>
            </div>
            <div class='item-details'>
                <h6 class='text-danger font-weight-bold'>".$data['nama']."</h6>
                <p class='text-secondary desc mb-1'>".$data['deskripsi']."</p>
            </div>
            <div class='item-price'>
                <h7 class='harga'>".$data['harga']."</h7>
            </div>
            <div class='tambah btn-danger p-1 my-3 text-center align-bottom'>Pesen</div>
        </div>
        ";}

        ?>

    </div>
    </div>
    <div class="cart-icon"  data-toggle="modal" data-target="#orderCart">
        <div class="jumlahOrder">0</div>
        <img src="img/shopping-bag.svg">
    </div>
    <!-- ORDER CART -->
    <div class="modal fade" id="orderCart">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
        <h4 class="modal-title font-weight-bold text-danger">Pesanan</h4>
        <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Body -->
        <div class="modal-body keranjang">
            
        </div>
        <!-- Footer -->
        <div class="modal-footer">
                <span class="price">
                        Harga Total : 
                        <span class="total-price">0</span>
                </span>
                <button class="btn btn-danger" id="checkout">Checkout</button>
            </div>
            </div>
        </div>
    </div>

    <!-- QR Code Payment -->
    <div class="modal fade" id="qrPayment">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <!-- Header -->
                <div class="modal-header">
                <h4 class="modal-title font-weight-bold text-danger">Scan QR Code untuk pembayaran</h4>
                <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Body -->
                <div class="modal-body">
                    <div class="qr-payment">
                        <img src="img/qr-code.svg">
                    </div>
                </div>
                <!-- Footer -->
                <div class="modal-footer">
                        <span class="price text-center">
                                Silakan Menunggu, pesananmu akan segera kami antar!
                        </span>
                    </div>
                    </div>
                </div>
            </div>

    </div>
    <script src="js/script.js"></script>
</body>
</html>