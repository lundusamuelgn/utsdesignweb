<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌏WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color: #2E8B57;
        --secondary-color: #3CB371;
        --light-color: #F8F9FA;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .product-img {
        height: 200px;
        object-fit: cover;
    }

    .badge-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .price {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.2rem;
    }

    .btn-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-eco:hover {
        background-color: var(--secondary-color);
        color: white;
    }

    .product-detail-img {
        border-radius: 10px;
        height: 400px;
        object-fit: cover;
    }

    footer {
        background-color: var(--primary-color);
        color: white;
        padding: 50px 0 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Produk Ramah Lingkungan</h1>
            <p class="lead">Temukan berbagai produk eco-friendly yang mendukung gaya hidup berkelanjutan</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-listing mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="fw-bold">Produk Kami</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown">
                            Kategori Produk
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Semua Produk</a></li>
                            <li><a class="dropdown-item" href="#">Produk Organik</a></li>
                            <li><a class="dropdown-item" href="#">Produk Daur Ulang</a></li>
                            <li><a class="dropdown-item" href="#">Perawatan Rumah</a></li>
                            <li><a class="dropdown-item" href="#">Perawatan Diri</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/bf/1d/8e/bf1d8ec0ccd173a42e6b2b1eb2abe4c3.jpg"
                            class="card-img-top product-img" alt="Sabun Organik">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Perawatan Diri</span>
                            <h5 class="card-title">Shampoo & Conditioner Organik</h5>
                            <p class="card-text">Bahan dibuat alami tanpa bahan kimia, cocok untuk semua jenis kulit.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 45.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/bc/e9/fd/bce9fd56e4e7cd58be9450174719bf90.jpg"
                            class="card-img-top product-img" alt="Sikat Bambu">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur Ulang</span>
                            <h5 class="card-title">Kerajinan Tangan </h5>
                            <p class="card-text">Terbuat dari serat bambu.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 40.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/d7/4f/32/d74f328bca1a1d2ddffaafc826688e20.jpg"
                            class="card-img-top product-img" alt="Tas Belanja">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Pupuk Organik</h5>
                            <p class="card-text"> Tingkatkan hasil panen dengan Pupuk Organik Berkualitas! 🌿 100% alami, 
                                                  ramah lingkungan, dan kaya nutrisi untuk kesuburan tanah yang optimal. .</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 20.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/0c/37/ae/0c37ae0d0cd015cc0e88b2dba397be3a.jpg"
                            class="card-img-top product-img" alt="Botol Minum">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Perawatan Rumah</span>
                            <h5 class="card-title">Sabun Cuci Piring Organik</h5>
                            <p class="card-text">Terbuat dari serat nabati tanpa bahan kimia</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 10.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/6f/ce/5c/6fce5ce07d909a5f42359520218f0a66.jpg"
                            class="card-img-top product-img" alt="Peralatan Makan">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Perawatan Diri</span>
                            <h5 class="card-title">Masker rambut alami  </h5>
                            <p class="card-text">Terbuat dari campuran pisang,madu dan minyak zaitun untuk rambut kering.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 50.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/dd/5e/41/dd5e410da2a8a054866dbc90e01f2fc3.jpg"
                            class="card-img-top product-img" alt="Pembersih Rumah">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur Ulang</span>
                            <h5 class="card-title">Pot Bunga </h5>
                            <p class="card-text">Terbuat dari limbah plastik yang di daur ulang dengan baik</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 30.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/c7/ba/97/c7ba97d5b16fcfe88d219c8555a7d0b2.jpg"
                            class="card-img-top product-img" alt="Straw Stainless">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Kertas Daur Ulang</h5>
                            <p class="card-text">Dibuat dari limbah kertas bekas, serat bambu, atau daun kering untuk dijadikan buku catatan,
                                 kartu ucapan, dan kemasan ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 25.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i.pinimg.com/736x/ca/25/3b/ca253b55df71e45d7e5b53d36feed150.jpg"
                            class="card-img-top product-img" alt="Lilin Aromaterapi">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Perawatan Rumah</span>
                            <h5 class="card-title">Pengharum Ruangan</h5>
                            <p class="card-text">Spray ruangan alami dari air mawar atau ekstrak tumbuhan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 60.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>