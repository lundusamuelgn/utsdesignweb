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
    --primary-color: rgb(43, 184, 57);
    --secondary-color: rgb(28, 198, 40);
    --light-color: #F8F9FA;
}

/* BODY */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #d4fc79, #96e6a1);
    color: #333;
    transition: all 0.3s ease;
}

/* NAVBAR */
.navbar {
    background: linear-gradient(45deg, white, #f8f9fa);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

/* NAVBAR HOVER */
.nav-link {
    color: #495057;
    font-weight: 500;
    margin: 0 5px;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: var(--primary-color);
    transform: scale(1.1);
}

/* LOGIN CONTAINER */
.login-container {
    display: flex;
    min-height: calc(100vh - 56px);
    align-items: center;
    justify-content: center;
    padding: 20px;
    animation: fadeIn 0.8s ease-in-out;
}

/* LOGIN CARD */
.login-card {
    width: 100%;
    max-width: 450px;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    background: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    margin: 20px 0;
    transform: scale(0.9);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* LOGIN CARD HOVER */
.login-card:hover {
    transform: scale(1);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

/* LOGIN HEADER */
.login-header {
    background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
    color: white;
    padding: 25px;
    text-align: center;
}

/* LOGIN LOGO */
.login-logo {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 10px;
}

/* LOGIN BODY */
.login-body {
    background-color: white;
    padding: 30px;
}

/* INPUT FIELD */
.form-control {
    height: 45px;
    border-radius: 8px;
    padding-left: 15px;
    border: 1px solid #ddd;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 10px rgba(46, 139, 87, 0.3);
}

/* BUTTON LOGIN */
.btn-login {
    background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
    color: white;
    border: none;
    height: 45px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

/* BUTTON LOGIN HOVER */
.btn-login:hover {
    background: linear-gradient(45deg, var(--secondary-color), var(--primary-color));
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(28, 198, 40, 0.5);
}

/* DIVIDER */
.divider {
    display: flex;
    align-items: center;
    margin: 20px 0;
}

.divider::before,
.divider::after {
    content: "";
    flex: 1;
    border-bottom: 1px solid #ddd;
}

.divider-text {
    padding: 0 10px;
    color: #777;
    font-size: 0.9rem;
}

/* SOCIAL LOGIN */
.social-login .btn {
    height: 45px;
    border-radius: 8px;
    font-weight: 500;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}

.social-login .btn:hover {
    transform: scale(1.05);
}

/* LOGIN FOOTER */
.login-footer {
    text-align: center;
    padding-top: 20px;
    color: #777;
}

/* LINK FOOTER */
.login-footer a {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.login-footer a:hover {
    color: var(--secondary-color);
}

/* INPUT GROUP */
.input-group-text {
    background-color: white;
    border-right: none;
}

.input-group .form-control {
    border-left: none;
}

/* HOME BUTTON */
.custom-home {
    display: inline-flex;
    align-items: center;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 8px;
    color: white !important;
    background: linear-gradient(45deg, #28a745, #218838);
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 3px 6px rgba(40, 167, 69, 0.4);
}

/* HOME BUTTON ICON */
.custom-home i {
    margin-right: 8px;
    transition: transform 0.3s ease;
}

/* HOME BUTTON HOVER */
.custom-home:hover {
    background: linear-gradient(45deg, #218838, #1e7e34);
    transform: scale(1.05);
    box-shadow: 0px 5px 10px rgba(40, 167, 69, 0.6);
}

.custom-home:hover i {
    transform: rotate(360deg);
}

/* ANIMASI FADE IN */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

button:hover {
    background-color:rgb(72, 121, 117);
    transform: scale(1.02);
    transition: all 0.3s ease-in-out;
}

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-leaf"></i> EcoGreen
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active custom-home" aria-current="page" href="index.php?page=landing_page">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <i class="fas fa-leaf"></i> EcoGreen
                </div>
                <p>Masuk Ke Akun Anda</p>
            </div>

            <div class="login-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukkan password Anda" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Lupa password?</a>
                    </div>

                    <button type="submit" class="btn btn-login w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i> Masuk
                    </button>

                    <div class="divider">
                        <span class="divider-text">ATAU MASUK DENGAN</span>
                    </div>

                    <div class="social-login">
                        <button type="button" class="btn w-100 border d-flex align-items-center justify-content-center" style="border-radius: 8px; border-color:rgba(251, 249, 249, 0.9); padding: 10px; background: white;">
                            <svg width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#4285F4" d="M24 9.5c3.04 0 5.68 1.06 7.78 2.84l5.84-5.84C33.94 3.36 29.28 1.5 24 1.5 14.74 1.5 7.12 7.36 4.08 15.5l6.8 5.3C12.64 14.8 17.88 9.5 24 9.5z"/>
                            <path fill="#34A853" d="M43.92 24.5c0-1.56-.14-3.06-.4-4.5H24v9h11.36c-.92 4.46-4.84 8-11.36 8-5.52 0-10.08-3.7-11.64-8.66l-6.8 5.3C8.36 39.6 15.68 44.5 24 44.5c7.44 0 13.72-2.46 18.
                                                    36-7.36l-5.84-5.84c-1.66 1.3-3.9 2.2-6.52 2.2-5.52 0-10.08-3.7-11.64-8.66l-6.8 5.3C8.36 39.6 15.68 44.5 24 44.5c7.44 0 13.72-2.46 18.36-7.36l-5.84-5.84c-1.66 1.3-3.9 2.2-6.52 2.2z"/>
                            <path fill="#FBBC05" d="M6.36 14.5a20.2 20.2 0 0 0 0 19.2l6.8-5.3a11.92 11.92 0 0 1 0-8.6z"/>
                            <path fill="#EA4335" d="M24 9.5c3.04 0 5.68 1.06 7.78 2.84l5.84-5.84C33.94 3.36 29.28 1.5 24 1.5c-8.32 0-15.64 4.9-19.92 12.64l6.8 5.3C12.64 14.8 17.88 9.5 24 9.5z"/>
                        </svg>
                            <span style="margin-left: 10px; font-weight: bold;">
                            <span style="color:#4285F4;">G</span>
                            <span style="color:#EA4335;">o</span>
                            <span style="color:#FBBC05;">o</span>
                            <span style="color:#4285F4;">g</span>
                            <span style="color:#34A853;">l</span>
                            <span style="color:#EA4335;">e</span>
                        </span>
                    </button>
                    <button type="button" class="btn btn-outline-dark w-100">
                            <i class="fab fa-tiktok me-2" style="color: rgb(50, 50, 50);"></i> Tiktok
                        </button>
                        
                        <button type="button" class="btn btn-outline-primary w-100">
                            <i class="fab fa-facebook-f me-2" style="color:rgb(13, 75, 156);"></i> Facebook
                        </button>
                    </div>
                </form>

                <div class="login-footer">
                    Belum punya akun? <a href="#">Daftar sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
    </script>
</body>

</html>