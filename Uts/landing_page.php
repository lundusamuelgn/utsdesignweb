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
        --primary-color: #28a745;
        --secondary-color: #218838;
        --dark-color: #343a40;
        --light-color: #f8f9fa;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        scroll-behavior: smooth;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white !important;
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
        font-size: 1.5rem;
    }

    .hero-section {
        background-color: #218838;
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0;
        text-align: center;
    }

    .btn-worldgreen {
        background-color: var(--primary-color);
        color: white;
        padding: 10px 25px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .btn-worldgreen:hover {
        background-color: var(--secondary-color);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        position: relative;
        margin-bottom: 50px;
        font-weight: 700;
        color: var(--dark-color);
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -15px;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--primary-color);
    }

    .about-section {
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .company-carousel {
        padding: 80px 0;
    }

    .carousel-item img {
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    .testimonial-section {
        padding: 100px 0;
        background-color: var(--dark-color);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .testimonial-card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 30px;
        color: var(--dark-color);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        height: 100%;
    }

    .testimonial-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--primary-color);
        margin-bottom: 15px;
    }

    .rating {
        color: #ffc107;
        margin-bottom: 15px;
    }

    .feature-box {
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    footer {
        background-color: var(--dark-color);
        color: white;
        padding: 70px 0 0;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        margin-bottom: 10px;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }

    .copyright {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 20px 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>


    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Ramah Lingkungan,Keberlanjutan dan Inovasi Hijau </h1>
            <p class="lead mb-5">WorldGreen hadir dengan solusi berkelanjutan yang inovatif, 
                                 membantu bisnis dan masyarakat mencapai tujuan lingkungan dengan cara yang lebih cerdas dan bertanggung jawab</p>
            <a href="#about" class="btn btn-worldgreen btn-lg me-3">Pelajari Lebih Lanjut</a>
            <a href="#contact" class="btn btn-outline-light btn-lg">Kontak Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="text-center section-title">Tentang WorldGreen</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/6/25/2ea76ef9-18e4-440d-bff1-1334d4fd0b84.jpg"
                        alt="Tentang WorldGreen" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4"> Misi Kami untuk Masa Depan yang Lebih Hijau</h3>
                    <p>Sejak didirikan pada tahun 2006, WorldGreen berkomitmen untuk menghadirkan solusi ramah lingkungan yang
                         inovatif, praktis, dan terjangkau bagi bisnis serta individu. 
                        Kami meyakini bahwa setiap langkah kecil menuju keberlanjutan dapat menciptakan dampak besar bagi bumi kita.</p>
                    <p>Dengan tim ahli yang berdedikasi, kami telah membantu lebih dari 800 perusahaan mengurangi jejak karbon mereka dan 
                        menerapkan praktik bisnis yang lebih hijau. Produk dan layanan kami tidak hanya efektif, tetapi juga mendapat pengakuan internasional atas inovasi dan kontribusinya terhadap lingkungan. 
                        Bersama, kita bisa menciptakan masa depan yang lebih hijau dan berkelanjutan! </p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h4>Update</h4>
                                <p> Solusi berkelanjutan yang mendukung kelestarian lingkungan demi masa depan yang lebih hijau bagi generasi mendatang.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4>Inovatif</h4>
                                <p>Inovasi teknologi terkini untuk efisiensi energi dan pengelolaan sumber daya yang lebih cerdas dan berkelanjutan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Carousel -->
    <section class="company-carousel" id="company">
        <div class="container">
            <h2 class="text-center section-title">Galeri Perusahaan</h2>
            <div id="companyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/736x/a2/d2/b5/a2d2b57c29f9f704b5609ac6ad3b6ff3.jpg"
                            class="d-block w-100" alt="Fasilitas WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Fasilitas Produksi Ramah Lingkungan</h5>
                            <p>Pabrik kami menggunakan 100% energi terbarukan dengan sistem daur ulang air terintegrasi
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/e6/e2/0b/e6e20bfbcb8f80dbf0affdf19e06273d.jpg"
                            class="d-block w-100" alt="Tim WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Tim Profesional yang Berdedikasi</h5>
                            <p>Lebih dari 200 ahli lingkungan bekerja untuk menciptakan solusi berkelanjutan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/63/7c/fa/637cfa325206c93225b78e45cedfca28.jpg"
                            class="d-block w-100" alt="Proyek WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Proyek Penghijauan Global</h5>
                            <p>Kami telah menanam lebih dari 1 juta pohon di 15 negara berbeda</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <h2 class="text-center section-title text-white">Apa Kata Klien Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBC
                                goKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAmAMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAQIDBAUGB
                                wj/xAA7EAACAQMCAwYCCAUDBQAAAAABAgMABBEFIRIxQQYTIl
                                FhcTKBBxRCUpGhseEjM8HR8GJy8RUWJDSC/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAUBAgMEBv/EACcRAAMAAgICAQQBBQAAAAAAAAABAgMREiEEMVETIjJBYRQjM0KB/9oADAMBAAIRAxEAPwDneKMU
                                dHimJzhYo8UAKPpQBWajcyJcpEvwkAmmYpBJiOTZQOm+fehqjqbhgACRgHBpmyRiy7HDHHL8aWZnttnZiXpIsI7XvZY1YcOcYAXO3Sj7qe0unjg8cTjhIPUetaPTNLa7ZW3VDuX5e1bKw0eztkBMQYnm
                                Tv8ArS6/JUsZT420cptbC9uHAhhLqOQHIe5pVzEbOV4px8WM8Jx612b/AKdA0BRIuENtsN/lVNP2E0y98cjTK3Xx9arPlJvv0WfipLo5vp1j9auBwIGTfdSGzTUtn9Tmf+Ed8qR6ZFdQ0/s9ZaRGAlvlwSCc
                                HP71EudGjvJyEtjKn22RdlqP6pcuvQf0y4/yc4LLbyuYxwAAMpHUY50i2u8T97IneA+E5Xoa3Z7E3DSt3cxEB+ztWY1zsve6dIzxRtLDzLLzHvXRGaK6MLwXK6H4bi0SYOq8Qx8I26/801O8Mz8cBwDzRuYqu0hI7
                                iRuKYoee2Mk/wBKmRWyo2Fzvupzz862xV9PIYZJ5xoIihinCMUmnG99i0LFFSqFSQDFHihR0AFim7h+6jz57CngKhapkQLj74B9sGq5dqHotHspZEkMrOVyxPFkVe6X3U7xAoOLh8RHL/OVV1pG/dK4IKZ3B5jb9qndnx
                                wNhuYON6UZXuWMsC+9HQ9IA7leHoKv4OW9Z/RAe7WtDbDIx60lv2OF6J1vzAqzhQADwjlzqshRs5WpQ70AYDfhRJDRLkSGXaRQ2Ka7uNPgAA9Kb7uc+1KKso8VTshShubh4Diqa7VSDxDarWZsqQKqblsow6iglro552r0JI9R
                                +s2Q7tpF4iF23z/XYVSQXjPdR28nHxcW5ath2iu0ijRzu2y+wDZJrHd5HJqLzOAoUFh67E4B86Y4XVT2LMqSromyqVcqeY2OaRijDmVVkO5YZ8qGKf4nuExTa1TE0KM0dXKBCjo8UMVJIBTV3CJ7dk68xTtHw8QOailtAvZl2keHjUb
                                cuXnVppEgNzIVOU2/Oo2qW6KG4AVK8yWzxD2qT2XtzcNMqKSfCAPOk+TXFjHFym0dC0a6klhRLaAvtscc6t+91aABXgC438O9Ze11ZtLso8FRjIyR8IH+cqkRdu7iSU25tJQ32S7byeigIQD7mln0XT2hk8qn2aqy1cM3BL4Wz12NX8d67
                                DI3HnWH1BJ5JpIJ4RHPH4lkUc/f9q0nZ+YSaWveH+Jw7+9ZNaNN7H77U5Y9kbf0qJbzatcP/MRVO4LUeo206wmaHxEf6Sd/ashrWoazprRyrG8qscMFUuy8+gIHlVpjk9FKvU7NpNDfqCz8DsN9jiqyS4aRysiFHA3FVmm67qTQxSXkJhZicA
                                54WAONwfhz5gmtBdQLNF9YTZhvioc8XomabWzlPbW5ePVRCThCvFj32qicHucFsFMnHU561qPpIsfFBdqOSkH2zUbsxYQTWDO0YmaVgpV9wq/1NMMdSsSZxXDvK5RG05ibBAykMNt/Kn6X9TksOK2lILRuwGPLO1FineBL6a0Ksv5MQRQpVCtTMKj
                                oUoVIBUY5GhigBQAxe2f1ux41BMiZU/L9sU52O4YnHFzEozjpVjpQVppI2+GSNvxA2oWllDaXhKZ4ZGVvy3/SkPkJ46qP+jrB/cmbNSmiLNP36xd4vFlUOMDNWVvZRJcd7/0+PvBzkZVJ/HnT+jBjAoPlVnMvBHgc/OlXNoY/TX7KTWbkR2rJwqnFz4R
                                86Gj5FihU8xmq7X38fAxztsPWrfRt9MUFSCB5VWm2jSI1stIZDIhXO5pgWkiOWSVN+kinejtyp3OxFWKLxJ0PrQqKOERBA0y8EvdAeSCiuQkds6iNVwOfCKmdwRv+lQdQbEbD0o7I4rRz3tkjXaRRBCygHJ8xt0qf2O7Nw2NtDc5aRScg8bED/wCeWaudDi
                                WfVwGUEKpztVzdLDYQ3Lp4YU8WPbc1tyrShGczCrkznfazgGrMqYyUUsAMYOP+KpafvLiS7uZLmX45GLH59KZr1WCOGKZfwedzWryNoTihRmhWpkFSsUVKFBGwUYFACjFSA5bssc6s2eHO+Kn3gW3uYcMGyNsc/nVbRSM7leJicbClvn4Hf3r9Hf4Wbj9jOka
                                NdAwIdsYqyub5EiOACxGwrJdmWkmtcJu67YJ5GlXUs0LEyFgCSMsQM+1ed13of8k/RDvdUtpL9opZED8YOGONq2ekXNktoQCrcS5G4rnd9o8OpkgzR8WcqwblUnRuyWswSBY9UQW/3Qw4seta8Ic732VdXvWujYPqFnFOYu/Qu3JF3JPtUmS4eCAS4YqPi9Kj2m
                                nQafCEjePOMswxTkksJUpJKmD04hnyrHj8F99dljbXwliDBwwPIiq/UpxxAA1A061uLO7lh8f1Y+OINzAPSlXSs85J5Ku9BDaEdm+E6lOZACMDrtTfbXVIoLNrGJv/ACJh4v8ASv71THW5tJvphbojiRftdMcqory5lvLmS5uG4pXOSf6U28Lwqu1ktdIV+Z5cxDi
                                H2Rz+tFSjRYp8JhNHRkUKkjYnFKAoqUOdAAo6FChACjUhXBPLNClpE83EqLnCknpgeZrPPKrG0y+KnNpo1PZaQWuqFD/LnAYe/UVotf0y1u7d4JlBilUkZXkfSsLol7xW8ZDfxYG5dfI1vBOt9ZJwnJUZBryORNXs9ND2jCaNoVnps851GWaSIOvAQSSgzuNq2NjY6FJ
                                Gksd9J3cjnwtMykjfbHPbaqzgIu2bIDH4getXNssIjAZcHkcHY1NU67Zf6c66rQzJb6IW7pGuJ28e/E2Bz4aZ7PdmbO21CbUGRnYnEQlbj4B6Zq3EUDL4QBn1qZFhEGBtVXTRPGV/Im4CqrN9oiqO7cQ28sjHnvVrfSHhGKyvaG7CxiJTgmjHPJpGVVrsyt7J310z9CTTO
                                KUeZ96TXr8UcIUnm8t8rdCaFGaFaGYk86OgRQoAKlCk4pXSgA6PFEN+VR7q8WBCFAZqi7ULbJUt+gXt3HaR8RGW+yBWk0XTLg9jry9uge+u4+JQBjgQch8+fzrEWEDatrNrbzN/7Eyqx8l64+QNd5gtoWga0ZAIHTuuEdBypP5XkVfS9HbhhS0zjME7Wd8sg+CQ4Y1stA1MLO
                                sRbY/D7VRatpDWdxPaTqQY3Kscfg3+edVsMksDhST3ibqetLrlZENVuO16On3NnHI3eqc56ijS1kUDu/0qq0PWkvIgHbhbHiB6GtMjRCIMGGa5dNPR0qk0Fb2pGGY4PlUmVhGvMcqQbiJEBaQDA86pNU1hP5UR4m9+VClsi7SC1C8C5ORgetZK7kaZpbh/hUYUGpV1cNdyGNCSg
                                5momqfwYY4hzbfH+e9dni4uWWZOXPfHE6KqiowNqI16lHngjRUdCgAqKlUVACSyr8TAfOmnu4kHMsfSoJfPPf3piZsKSu3tSyvMt/j0dKwL9k9rxmU4wgP41VS5JJzmnnOI8HmKbPiG2K53dU90aqUvRO7KyLH2l0xpDsbhV+Z8I/M136OFc7V5zidoJopoziSJw6keYII/SvSOlyrc20M64Kyxh1x6jP8AWsMvySU/arRPr1v9cgXM8S4fA3ZP2/SubarppIDLlMbq4+yf7V3VYgy7bHoayvaXs5lJLmCPwN/Nj+76j0rle09o7sGZNcKOOQXjW0pS5V4perJ+tXMXaSeJAsd3A+2wLYP51K1PQ+9XgkQn7sijlVH/ANrXLTcLpxR/eX+1aKor2avHUvSJ0naO5nPd/WEU8sIeJvyzU+zs7u5XJDRR8yW+Jverns92at7KNW7pOLnkkGrK6OXKIQN8DArKqX+qLqPkp4LRYhhBgLzqB2sthZDSHcnjvIJZDnoFZQPyatVaac9zPFboMySNj5daz/00kQazosEJwkNtIq+2U/tWviU1k5/Bz+brjwMzRGkxOGgV2P8Aux0pxVDjKMDXoI8rHX7EzxUhFA0pkYDcEe9JrdNP0ZtNewqFChUgZ/j2opm2GeXEM0mg3xJ/upGd+x2RlcnAO9N8OKV60eM0ANgYO1d2+i+9+v8AZWBWI47VjA/pjcfkRXC+RrpX0MagY9VvNOZjwXMIkRT99D091J/AVnkW0B2W2UEDrUsRqF5DHl51EtFwanqNhWULZDZlda0qO3lLxRKIZDnlgKfKqK5tgycLKCK6PJGkiskgDKRuDWMujplzdyRaXqVpMyOVeMzDwt1APXyx0rHNga+5ehh43ky1wszapPEeCMkj1qZbWpJyw3PM1ZvptwgaT6uWUDPEhBH+fKkyTWGjxi77R31vYWuMhZXw8h8gvM/LJ9qwmKp6SOqsmOJ5bLjQNN7lTeSDDEYjHp51y/6b4Qms6NKTs8Uy/gUP9a7PbXVtfWUNzYzJNbSoGjkjOVYHqK5f9ONoW0vTbtVJMN0VY/dV1I/ULXdjnhXEUZMjy1yZzCynCjDZx5U87oG4lzj8KromPlip0YZozmruUmSmPLcleUmR6704J1Y7hT7bVWEcB4emdqAk3welWmql7lkNJ+y18Hmw9xQquSdlOQ21Ctl5Wb5M/pQVXWlH419KFCqEhryApQoUKCRL8q0n0dTyW/bTRzGcd5PwN6qQcihQqK9AekU+PHQVJHNaOhWWP2VZ5/8ApL7aa5fdp7zs8Lr6tp8LMpW2yjSD/U2c/oKqPop1y/sO0TaRDLmymLkxvk8JAO48jtQoVvaXAifyOka12j1C2t9SW3aOIWrcKcAI4hw53Oc9emK4bqeo
                                3Gq3i39+RNPIAGL5Ow9z60dCjClovZ1L6C9Tu1uZ9KMpaykDSiJtxG2N+HyzWt+lqFJex96XHwd2646ENQoVhX+QlnCUO9Si7CMYNChV6LIYkYkZJpGcqDQoUIqxDE550KFCrEH/2Q==" alt="Testimoni 1"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Layanan yang diberikan sangat profesional dan berdampak positif bagi lingkungan. 
                            Kami sangat terbantu dalam menerapkan solusi hijau yang efisien dan berkelanjutan."</p>
                        <h5 class="text-center mt-3">Mark Zuckerberg</h5>
                        <p class="text-muted text-center">CEO META</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://asset.kompas.com/crops/iydtQHRM_YB9o_C83PvXWCZ_cMg=/0x0:1000x667/750x500/data/photo/2023/10/20/6532417117620.jpg" alt="Testimoni 2"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Perusahaan ini benar-benar berkomitmen pada keberlanjutan! Produk mereka ramah lingkungan dan inovatif, 
                                                membantu kami mengurangi jejak karbon tanpa mengorbankan kualitas!"</p>
                        <h5 class="text-center mt-3">Elon Musk</h5>
                        <p class="text-muted text-center">CEO of Tesla</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="data:image/webp;base64,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
                                  zrEnSPOmqjQzutxz8Z9BMquYp/VbvLAxquL+ozrryfuTGu9J9p238Ohnl7U4WeHgU3y4KcazYJVur650EsuZOBCM/B5098X3Dux7Lra5prg49jxCnnWgr0sFtshv9P0MnAbKSQ5ad70HZOYEO3sn24GTbCyy1gi2cOp76ONvh00SLPyg5SelpBoqcEzXs5Q2NEYV
                                  guKaoenZyW4gDOtMgXr7hyePSgE77aclNQLH8NhWlDEAko94zW/GaRee1u/qLfixjoIYNj9oQrZ7gjLRmB1SKEKT2gpfRO96LY4BvYUlwYGD3AqUWpTj02u
                                  CQhOF6fr00DFLCnMMS8UKgAWcPIRhvvSS0iK87QZJz9QQeolO48rPm1CvLOFAaX3eBH/j/fplVhMJjEj9APRXizAyOWmpSHNR5ruB8AJkcj3g8qewz2J7cLHKQ5Xaj/i2y
                                  86VUABbC5DAcWWF2arj6N44GFPSR3bypUBlXV/ua7R6NahflRN/eKHeb2WIa91yRPltwDXj1C/oSHmccMluoigPUc0ltlJnBmdjZbtObOvtQI7/5uwu/wsc2t4UKRa++fIyIQkAJ6MTDoc6ot7AjBnbYdc0pyPRE0jIbduFi8cl6iMWU6JGavsoelZ8Aj76F+qYXpSeH5/pc4UHVepmGhJcDYu0KTgL9+gB7KkdtXFvHKepONolpo79NQAJ3tRrzB8jhcXFQaOYspgPAb+Hp+TXtlCYi82eE8Ih49NQRG1WOqs4Lpl7gLjwx77RNYY4fw9CvjcTs2r7s2psRwMFu9OjoDrASSvlX/4hxKsWuq5hrNsEuwLgBQ+wymEEtCS1OedGpku+RIQ9Mm4V7eI+4M6zmiYvv4o+cJ2UpI5uPBa9EjbU9hzD4Cmsxn7TrWkHfRpp5VR+PwefyK4rNINKfwbZ6ex6EoN0oyHOBDHgnYeCTUukJsdsf6BquPL+T2pZxBLb7qm/UWJ2SDZCwPc6+ciCcoig3B9/SXGYf/qteQIWxaPPGv2FT2yIlq1t5HoGEUqvqKberDm+k/A3J5P6MCP+rO7U8VclVbIuEv58UsgE4Mouxx2gAdEFWw5PHmQRKD/u7dME+Zk2hT/Xpkgva6eVLiuCPjolSOIzkNhOufmusVmSFQA8VLiLfac8PnERTY87hA8bhW5cLt5fa0rtjXN6Y5kSOlWBlUzMvWKVuXcxooeiJLl+5Fz4eHtovpqn5lL8qBWxyp51HXcXqTqc7HeGcEzWU0HZyir9GNmaaYd5M2pUe0st64PdkUnmzbq7QyJ43jxZ/IG0xf+9fbeBLSjOK1lEW2B7JvY50zae99MiBoG9HkKDroEO3ZinuFq4TV6TqgqN1RaoyJrrriptUc6quK2/6VljLH/08NAT0ZffHUDnsT6cVVsL42Vy2e29/yrNkP2oXd0GuAcvc6VOI7sx/k9NjYd3Ue2wEobPutekbEQG5AK/9J1YX1OEv5tH5gmTXVYIApO1NI0CdMjpHwuqHZ4+eLBNkAgElfD4BNysgDRWpvz5VIy8cj/477jQdzW3WkEZP0eOGy9qZ43blTpKrhtUi6J8q9OQyO9se1OYeh35kQdiM2XJbtdPEjzdOFHdQcGx//ZxxQjqMEzUYsvAFw2V3z+ZHqju9KhGlqAWRZgtPCpmq/QpMSHgp7/NtwPngckXbWWTnzz0WP2TPzY6CDgRvokPD411wMi+S24rc5MUBhq8Ul9sRVeSp+bUKwBdP2JG79fyfSfktXAyIo+NqIS07XBvBJGw5rZv+s5UiApFr/fDnZpLpx7C3lS0djxo5V2K9fwr2yVhFNNdsLVWPD7Fq+1jmTV34dn5+DVVrYwnn40sbG3GAcMYCCItNKTAQ4qTzpea/z3HcMGq7sPqC6KcA+h727CfiET4suzk5nNE+Tu0FfXbJYeyKFKy1geOZZF+/BPWcb1QIHBhmWlJ7xrvvMWk5CQB+8O+A6S96KYbSjTJXIP5G/Wte5uRhFbksGdeQa7FuWZERHXUQtcrSGEBxo7sfs+42seNUES+su9qPO6/dZXjTDTgNQx3O31Gh8CmQQHYhGtUUAQ4v7sdqyJJPnesVbo7Izk9ZpSUquKeHQJ8VwJT2AXlwN5cd4jAyjjPjOGLYoWWUWbiRIz9sxMabG2wYNwAAAA=" alt="Testimoni 3"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-center">"Terima kasih atas dedikasi perusahaan dalam menciptakan ekosistem yang lebih hijau. 
                            Kami bangga bekerja sama dengan tim yang peduli terhadap masa depan bumi!"</p>
                        <h5 class="text-center mt-3">Satya Nadella</h5>
                        <p class="text-muted text-center">CEO of Microsoft Corporation </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>