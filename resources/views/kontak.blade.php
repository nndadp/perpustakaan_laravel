<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>TropisiAnimal</title>
</head>
<body>

    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Tropisianimal</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                   <li class="nav-item px-4">
                        <a class="nav-link text-white" href="/home">Home</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="/galery">Galery</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="/kontak">Kontak</a>
                    </li>
                    <li class="nav-item px4">
                        <a class="nav-link text-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <img src="img/x1/pascal-muller2.png" alt="back" width="1349">
        <div class="d-flex text-xl-start">
            <div class="title">
                <div class="kontentitleten">
                    <div class="hwn">
                    <b>Kontak Kami</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white w-100 vh-100 d-flex text-xl-start">
        <div class="title">
            <div class="kontentitlecon">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31704.01957352069!2d106.86047528157108!3d-6.646616014991402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c842a35c8315%3A0x65415f4ffebbf305!2sCipayung%20Datar%2C%20Kec.%20Megamendung%2C%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1633402255048!5m2!1sid!2sid" width="1100" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div class="bgwh w-100 vh-100 d-flex text-xl-start ">
        <section class="sec-contact">
            <div class="container">
                <div class="mbk2 text-black">
                <b>Kontak</b>
                </div>
                    <table class="mt-4">
                        <tr>
                            <td rowspan="4">
                                <div class="form-floating">
                                    <textarea class="form-control txtarea-size" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                                    <label for="floatingTextarea2">Deskripsi</label>
                                </div>
                            </td>
                            <td><div class="form-floating form-size">
                                    <input class="form-control form-control-lg" type="text" placeholder="subject" aria-label=".form-control-lg example">
                                    <label for="floatingPassword">Subject</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating form-size">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Nama">
                                <label for="floatingPassword">Nama</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-floating form-size">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Email">
                                <label for="floatingPassword">Email</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>  <a href="/profile" class="about-button btn btn-primary">Kirim<svg xmlns="http://www.w3.org/2000/svg" width="17.986" height="18.414" viewBox="0 0 17.986 18.414">

                            <g id="send" transform="translate(1 1.414)">
                                <line id="Line_2" data-name="Line 2" class="cls-1" x1="9" y2="9" transform="translate(6.572)"/>
                                <path id="Path_2" data-name="Path 2" class="cls-1" d="M17.818,2,12.282,17.818,9.118,10.7,2,7.536Z" transform="translate(-2 -1.818)"/>
                            </g>
                            </svg>
                        </a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <div class="bgwhite w-100 vh-100 d-flex text-xl-start marnew">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title2">
                        <div class="kontentitlenewkon">

                            <div class="square2">
                                <div class="contentsq3">
                                    <div class="round2"><img src="../img/mail.svg" alt="pin"></div>
                                    <p><b>Email</b></p>
                                    <div class="smalltxt">Tropisianimal@gmail.com</div>
                                </div>
                            </div>

                            <div class="square2">
                                <div class="contentsq3">
                                    <div class="round2"><img src="../img/phone.svg" alt="pin"></div>
                                    <p><b>Phone</b></p>
                                    <div class="smalltxt">+62 812 3456 7890</div>
                                </div>
                            </div>

                            <div class="square2">
                                <div class="contentsq3">
                                    <div class="round2"><img src="../img/map-pin.svg" alt="pin"></div>
                                    <p><b>Location</b></p>
                                    <div class="smalltxt">Kota Bandung, Jawa Barat<br>Indonesia</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



     <!-- Footer -->
     <footer class="bgblack britmg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 mrr">
                    <h3 class="text-white mb-3">Tropisianimal</h3>
                    <p class="font-italic text-white me-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <ul class="list-inline mt-4">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-facebook"><img src="../img/x1/001-facebook.png" alt="fb"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-twitter"><img src="../img/x1/002-twitter.png" alt="twt"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 text-white">
                <h6 class="text-uppercase font-weight-bold mb-4">Usefull Links</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-white">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Hewan</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Galeri</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Testimonial</a></li>
                </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 text-white">
                <h6 class="text-uppercase font-weight-bold mb-4">Privacy</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-white">Karir</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Tentang Kami</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Kontak Kami</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Servis</a></li>
                </ul>
                </div>

                <div class="col-lg-4 col-md-6 mb-lg-0 text-white">
                <h6 class="text-uppercase font-weight-bold mb-4">Contact Info</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="#" class="text-white"><img src="../img/mail.svg" alt="mail" class="me-2">Tropisianimal@gmail.com</a></li>
                    <li class="mb-2"><a href="#" class="text-white"><img src="../img/phone.svg" alt="phone" class="me-2">+62 812 3456 7890</a></li>
                    <li class="mb-2"><a href="#" class="text-white"><img src="../img/map-pin.svg" alt="map" class="me-3">Kota Bandung, Jawa Barat</a></li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Copyrights -->
        <div class="bg-black py-1">
        <div class="container text-center">
            <p class="text-white">copyright © 2020 All rights reserved</p>
        </div>
        </div>
    </footer>
    <!-- End -->

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-black', 'shadow');
            } else {
                nav.classList.remove('bg-black', 'shadow');
            }
        });
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
