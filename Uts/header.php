<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>WorldGreen</title>
    <style>
    .navbar-brand {
        font-weight: 700;
        color:rgb(16, 81, 19) !important;
    }

    .navbar {
        background-color: #f8f9fa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color:rgba(12, 233, 34, 0.92);
        font-weight: 500;
        margin: 0 5px;
    }

    .nav-link:hover {
        color:rgb(12, 238, 110);
    }

    .logo-icon {
        color: #2E8B57;
        margin-right: 8px;
    }

    /* Styling untuk tombol Masuk */
    .btn-custom {
        background: linear-gradient(45deg,rgb(7, 216, 31),rgb(7, 236, 34));
        border: none;
        color: white;
        font-weight: bold;
        padding: 12px 20px;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 4px 10px rgba(40, 167, 69, 0.4);
    }

    .btn-custom:hover {
        background: linear-gradient(45deg, #218838, #1e7e34);
        transform: scale(1.05);
        box-shadow: 0px 6px 14px rgba(40, 167, 69, 0.6);
    }

    /* Styling untuk logo navbar */
    .animated-brand {
        font-weight: 700;
        font-size: 1.6rem;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #28a745 !important;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    /* Efek hover */
    .animated-brand:hover {
        color: #1e7e34 !important;
        transform: scale(1.1);
    }

    /* Styling ikon daun */
    .logo-icon {
        font-size: 1.8rem;
        color: #28a745;
        transition: transform 0.3s ease-in-out;
    }

    /* Efek hover ikon daun */
    .animated-brand:hover .logo-icon {
        transform: rotate(-10deg) scale(1.2);
        color: #1e7e34;
    }

    /* Animasi masuk (opsional, buat kesan smooth pas halaman di-load) */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-brand {
        animation: fadeIn 0.8s ease-in-out;
    }

    /* Styling Navbar */
    .navbar-nav .nav-link {
        font-weight: 600;
        color:rgb(13, 19, 14);
        transition: all 0.3s ease-in-out;
        display: flex;
        align-items: center;
        gap: 8px;
    }

/* Efek Hover */
.navbar-nav .nav-link:hover {
    color: #1e7e34;
    transform: scale(1.05);
}

/* Efek Hover Dropdown */
.dropdown-menu {
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* Efek Hover Item Dropdown */
.dropdown-item {
    transition: background-color 0.3s ease-in-out;
}

.dropdown-item:hover {
    background-color: rgba(40, 167, 69, 0.1);
    color: #1e7e34;
}

/* Animasi Ikon */
.navbar-nav .nav-link i {
    transition: transform 0.3s ease-in-out;
}

/* Efek Hover Ikon */
.navbar-nav .nav-link:hover i {
    transform: rotate(-10deg);
}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <!-- Logo EcoGreen dengan ikon -->
            <a class="navbar-brand animated-brand" href="#">
                <i class="fas fa-leaf logo-icon"></i> <span>EcoGreen</span>
            </a>


            <!-- Tombol toggle untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=landing_page">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-info-circle"></i> Tentang Kami
            </a>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-shopping-bag"></i> Produk
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php?page=halaman_produk">
                    <i class="fas fa-leaf"></i> Semua Produk</a></li>
                </ul>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-blog"></i> Blog
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
        </ul>
    </div>

                <!-- Tombol aksi -->
                <div class="d-flex">
                    <a href="login.php" class="btn btn-success me-2 btn-custom">
                        <i class="fas fa-user"></i> Masuk
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>