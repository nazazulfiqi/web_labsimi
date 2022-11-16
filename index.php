<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="src/icon-title.png" type="image/icon type">
    <title>LAB SI/MI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark p-0 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img id="image" src="src/logo_nav_light.png" alt="Logo Navbar"
                    width="200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="navbar nav-link me-3" aria-current="page" href="#beranda">Beranda</a>
                    <a class="navbar nav-link me-3" href="#berita">Berita</a>
                    <a class="navbar nav-link me-3" href="#perlengkapan">File Prkatikum</a>
                    <a class="navbar nav-link" href="#gallery">Struktur Lab</a>
                </div>
                <div class="navbar-nav ms-auto icon d-flex text-end">
                    <a class="nav-link active me-2" aria-current="page"
                        href="https://mail.google.com/mail/u/0/?view=cm&tf=1&to=labsimi2023@email.com" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                    </a>
                    <a class="nav-link active me-2" aria-current="page" href="https://www.instagram.com/labsimi_/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a class="nav-link active" aria-current="page"
                        href="https://www.youtube.com/channel/UC9y9b7hSTHw1tAKo4zgTbBQ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Beranda -->
    <section id="beranda" class="bg-dark d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-1">
                    <h1 class="text-light">Laboratorium Sistem Informasi & Manajemen Informatika </h1>
                    <p class="text-light">Penyajian Informasi seputar <span class="text-warning">Laboratorium<span>
                                Sistem Informasi</p>
                    <a href="#kontak" class="btn btn-danger ">Hubungi Kami</a>
                </div>
                <div class="col-md-5  text-start">
                    <img class="gambars" src="src/comp-landing.png" alt="gambar-landing" width="400px">
                </div>
            </div>
        </div>
    </section>
    <!-- End Beranda -->

    <!-- Berita -->
    <section id="berita" class="bg-light d-flex align-items-center">

        <div class="container-fluid">
            <h2 class="text-center fw-bold mb-3">Berita</h2>
            <p class="text-center testimonial-text-top">Berita Seputar Praktikum</p>
            <div class="owl-carousel owl-theme">
                <!-- CARD 1  -->
                <div class="card mb-3 " style="max-width: 740px;height:195px; ">
                    <button type="button" class="btn btn_modal" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop1">
                        <div class="row g-0 text-start">



                            <div class="col-md-4">
                                <img src="src/Jadwal_Praktikum.png" class="img rounded-start p-1" alt="..."
                                    height="100%">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pe-0">
                                    <h5 class="card-title">Jadwal Praktikum</h5>
                                    <div class="text-cover" style="height:77px;overflow-y:hidden" ;>
                                        <p class="card-text mt-1 ">Berikut ini adalah Jadwal Praktikum 2022-2023. </p>
                                    </div>
                                    <p class="card-text mt-3"><small class="text-muted">Last updated 1 months
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- CARD 2 -->
                <div class="card mb-3 " style="max-width: 740px;height:195px; ">
                    <button type="button" class="btn btn_modal px-1" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop2">
                        <div class="row g-0 text-start">



                            <div class="col-md-4">
                                <img src="src/cover_cara_mengirim_laporan_akhir .png" class="img rounded-start p-1"
                                    alt="..." height="100%">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pe-0">
                                    <h5 class="card-title">Tata Cara Mengirim Laporan Akhir</h5>
                                    <div class="text-cover" style="height:77px;overflow-y:hidden" ;>
                                        <p class="card-text mt-1 ">Berikut ini adalah tata cara / langkah- langkah untuk
                                            mengirim laporan akhir yang benar. </p>
                                    </div>
                                    <p class="card-text mt-3"><small class="text-muted">Last updated 1 months
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- CARD 3 -->
                <div class="card mb-3 " style="max-width: 740px;height:195px; ">
                    <button type="button" class="btn btn_modal" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop3">
                        <div class="row g-0 text-start">



                            <div class="col-md-4">
                                <img src="src/Cover tata cara berpakaian.png" class="img rounded-start p-1" alt="..."
                                    height="100%">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pe-0">
                                    <h5 class="card-title">Tata Cara Berpakaian dalam Lab</h5>
                                    <div class="text-cover" style="height:77px;overflow-y:hidden" ;>
                                        <p class="card-text mt-1 ">Berikut ini adalah Tata cara berpakaian yang baik dan
                                            benar di Laboratorium SI/MI. </p>
                                    </div>
                                    <p class="card-text mt-3"><small class="text-muted">Last updated 1 months
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Berita -->

    <!-- Perlengkapan-->
    <section id="perlengkapan" class="bg-dark d-flex align-items-center position-relative">
        <div class="container position-relative">
            <div class="row mx-0 pb-4">
                <h2 class="text-light text-center pb-5 fw-bold perlengkapan-judul">Perlengkapan Praktikum</h2>
                <div class="col-lg-4 col-md-6">
                    <div class="card position-relative card-perlengkapan mb-2 mx-auto" style="width: 18rem;">
                        <div class="card-icon-stay text-center position-absolute ">
                            <h1 class="bi bi-book text-light bi-icon"></h1>
                        </div>
                        <div class="card-body p-4 mt-4 ">
                            <div class="card-icon text-center">
                                <h1 class="bi bi-book text-light"></h1>
                            </div>
                            <h2 class="card-title text-center text-light">Buku Praktikum</h2>
                            <p class="card-text text-center text-light">Silahkan Unduh File Buku Praktikum</p>
                            <div class="button-lihat text-center">
                                <a href="https://drive.google.com/file/d/1-JQsT38iydN7XKDYvLf2QnpWLeqQDJkK/view"
                                    target="_blank" class="btn btn-light text-center">Lihat</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card position-relative card-perlengkapan mb-2 mx-auto" style="width: 18rem;">
                        <div class="card-icon-stay text-center position-absolute ">
                            <h1 class="bi bi-cloud-download text-light bi-icon"></h1>
                        </div>
                        <div class="card-body p-4 mt-4 ">
                            <div class="card-icon text-center">
                                <h1 class="bi bi-cloud-download text-light"></h1>
                            </div>
                            <h2 class="card-title text-center text-light">Aplikasi Praktikum</h2>
                            <p class="card-text text-center text-light">Silahkan Unduh File Aplikasi Praktikum</p>
                            <div class="button-lihat text-center">
                                <a href="https://drive.google.com/drive/folders/1J6poHzuOU8Gef_4PuKdVYl369zOWjkdV"
                                    target="_blank" class="btn btn-light text-center">Lihat</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="card position-relative card-perlengkapan mb-2 mx-auto" style="width: 18rem;">
                        <div class="card-icon-stay text-center position-absolute ">
                            <h1 class="bi bi-file-earmark text-light bi-icon"></h1>
                        </div>
                        <div class="card-body p-4 mt-4 ">
                            <div class="card-icon text-center">
                                <h1 class="bi bi-file-earmark text-light"></h1>
                            </div>
                            <h2 class="card-title text-center text-light">Berkas Praktikum</h2>
                            <p class="card-text text-center text-light">Silahkan Unduh File Berkas Praktikum</p>
                            <div class="button-lihat text-center">
                                <a href="https://drive.google.com/file/d/1__G-fGueS4TmjvIqY8Ha2dZIN3vBBbl_/view"
                                    target="_blank" class="btn btn-light text-center">Lihat</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Perlengkapan -->

    <!-- Foto Asisten -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <h2 class="fw-bold text-dark text-center gallery-judul">Asisten Aktif</h2>
                <div class="col-12">
                    <div class="card mx-auto" style="width: 12rem;">
                        <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                            <p class="card-jabatan text-center"><i>Head of Laboratory</i></p>
                            <p class="card-tahun text-center">2020 - Sekarang</p>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-md-4">
                            <div class="card mx-auto" style="width: 12rem;">
                                <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                    <p class="card-tahun text-center">2020 - Sekarang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mx-auto" style="width: 12rem;">
                                <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                    <p class="card-tahun text-center">2020 - Sekarang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mx-auto" style="width: 12rem;">
                                <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                    <p class="card-tahun text-center">2020 - Sekarang</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-lg-3 col-md-4">
                                <div class="card mx-auto" style="width: 12rem;">
                                    <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                        <p class="card-tahun text-center">2020 - Sekarang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="card mx-auto" style="width: 12rem;">
                                    <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                        <p class="card-tahun text-center">2020 - Sekarang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="card mx-auto" style="width: 12rem;">
                                    <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                        <p class="card-tahun text-center">2020 - Sekarang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 accordioncol-md-4">
                                <div class="card mx-auto" style="width: 12rem;">
                                    <img src="src/asisten_naza.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-nama text-center">Naza Zulfiqi</h5>
                                        <p class="card-tahun text-center">2020 - Sekarang</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- End Foto Asisten -->



    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&to=labsimi2023@email.com"
                    class="me-4 text-reset">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://www.youtube.com/channel/UC9y9b7hSTHw1tAKo4zgTbBQ" class="me-4 text-reset">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/labsimi_/" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/Labsimi" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="" id="kontak">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-5 col-xl-4 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Location
                        </h6>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.039854378094!2d106.79009881431057!3d-6.258480663015093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f10a903f7f05%3A0x1e3c83822188e5a9!2sSTMIK%20Jakarta%20STI%26K!5e0!3m2!1sid!2sid!4v1668580902113!5m2!1sid!2sid"
                            width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Attention
                        </h6>
                        <p style="text-align: justify">
                            Informasi bagi mahasiswa lanjutan maupun mahasiswa yang ingin mengulang praktikum, segera
                            lapor ke contact dikanan ini dan jangan lupa siapkan KRS anda. <br>
                            Thanks ! 😊
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>

                        <p><i class="fas fa-envelope me-3" class="footer_contact"></i> <a href="">
                                labsimi2023@gmail.com</a></p>
                        <p><i class="fas fa-phone me-3" class="footer_contact"></i> <a
                                href="https://wa.me/6285782694950">+62 857-8269-4950</a> (Fakhri)</p>
                        <p><i class="fas fa-phone me-3" class="footer_contact"></i> <a
                                href="https://wa.me/6287771365424">+62 877-7136-5424</a> (Clarissa)</p>
                        <p><i class="fas fa-phone me-3" class="footer_contact"></i> <a
                                href="https://wa.me/6285881839674">+62 858-8183-9674</a> (Daffa)</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class=" text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            LABSIMI 2022 ©
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End Footer -->

    <!-- MODAL -->
    <!-- Modal Card 1 -->
    <div class="modal modal-xl fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class=" text-end py-3 pe-3">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="src/contents/Jadwal_Praktikum_PTA2022-2023.png" alt="" width="100%">
                </div>
                <div class="modal-footer py-0 my-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Card 2 -->
    <div class="modal modal-xl fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="text-end py-3 pe-3">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="src/Contents/cara_mengirim_laporan_akhir_1.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="src/Contents/cara_mengirim_laporan_akhir_2.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="src/Contents/cara_mengirim_laporan_akhir_3.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="src/Contents/cara_mengirim_laporan_akhir_4.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item ">
                                <img src="src/Contents/cara_mengirim_laporan_akhir_5.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer py-0 my-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Card 3 -->
    <div class="modal modal-xl fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="text-end py-3 pe-3">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img height="100%" src="src/contents/TATA CARA BERPAKAIAN DI DALAM LAB_1.jpg"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="src/Contents/TATA CARA BERPAKAIAN DI DALAM LAB_2.jpg" class="d-block w-100"
                                    alt="...">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer py-0 my-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script>
    $(".owl-carousel").owlCarousel({
        center: true,
        loop: true,
        margin: 100,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
        },
    });
    </script>

    <script>
    const nav = document.getElementById('nav');


    window.addEventListener('scroll', function() {
        scrollposition = window.scrollY;

        if (scrollposition >= 580 && scrollposition <= 1260) {
            nav.classList.remove('navbar-dark', 'bg-dark');
            nav.classList.add('navbar-light', 'bg-light');
            nav.classList.add('navbar-light', 'bg-light');
            document.getElementById("image").src = "src/logo_nav_dark.png";

        } else if (scrollposition <= 590) {
            nav.classList.remove('navbar-light', 'bg-light');
            nav.classList.add('navbar-dark', 'bg-dark');
            document.getElementById("image").src = "src/logo_nav_light.png";

        } else if (scrollposition >= 1240 && scrollposition <= 1890) {
            nav.classList.remove('navbar-light', 'bg-light');
            nav.classList.add('navbar-dark', 'bg-dark');
            document.getElementById("image").src = "src/logo_nav_light.png";

        } else {
            nav.classList.remove('navbar-dark', 'bg-dark');
            nav.classList.add('navbar-light', 'bg-light');
            document.getElementById("image").src = "src/logo_nav_dark.png";
        }
    })
    </script>

    <!-- <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card-perlengkapan"), {
            max: 25,
            speed: 400
        });
    </script> -->



</body>

</html>