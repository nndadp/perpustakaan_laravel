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
                {{-- <div class=""></div> --}}
                <ul class="navbar-nav">
                    <li class="nav-item px-4">
                        <a class="nav-link text-white" href="/">Home</a>
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
    </div>
    <div class="bg w-100 vh-100 d-flex text-xl-start">
        <div class="title">
            <div class="kontentitle">
                <div class="hwn">
                <b>Hewan<br>Tropis di Dunia</b>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="bg-white w-100 vh-100 d-flex text-xl-start">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title2">
                        <div class="kontentitle">
                            <p class="greenfont">TENTANG KAMI</p>
                            <div class="mbk text-black">
                            <b>Membangun<br>Komunitas Hewan</b>
                            </div>
                            <p class="text-black"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</b> </p>
                            <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <button type="button" class="btn btn-success mt-2">baca selengkapnya <img src="img/arrow-right (1).svg" alt="arrow" class="px-2"></button>
                        </div>
                    </div>
                </div>

                <div class="col2">
                    <table border="0" class="marginni">
                        <tr>
                            <td>
                                <div class="gambar">
                                    <img src="img/x2/alessandro-desantis-9_9hzZVjV8s-unsplash@2x.png" alt="gajah" height="179">
                                </div>
                            </td>
                            <td>
                                <div class="gambar">
                                    <img src="img/x2/joshua-j-cotten-VCzNXhMoyBw-unsplash@2x.png" alt="komodo" height="179">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" >
                                <div class="gambar">
                                <img src="img/x2/kyle-nieber-3ryX0ShTMWg-unsplash@2x.png" alt="buaya" width="512" height="250">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="bgpem w-100 vh-100 d-flex text-xl-start">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title2">
                        <div class="kontentitlenew">
                            <div class="mbk text-white">
                            <p><b>Kami membawa anda<br>Untuk mengetahui lebih dalam</b></p>
                            </div>
                            <div class="square">
                                <div class="contentsq">
                                    <div class="round"><img src="../img/pawprint.svg" alt="pin"></div>
                                    <p><b>Lorem ipsum <br> dolor sit amet</b></p>
                                    <div class="smalltxt"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                            <div class="square">
                                <div class="contentsq">
                                    <div class="round"><img src="../img/pawprint.svg" alt="pin"></div>
                                    <p><b>Lorem ipsum <br> dolor sit amet</b></p>
                                    <div class="smalltxt"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>
                            <div class="square">
                                <div class="contentsq">
                                    <div class="round"><img src="../img/pawprint.svg" alt="pin"></div>
                                    <p><b>Lorem ipsum <br> dolor sit amet</b></p>
                                    <div class="smalltxt"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>
                            <div class="square">
                                <div class="contentsq">
                                    <div class="round"><img src="../img/pawprint.svg" alt="pin"></div>
                                    <p><b>Lorem ipsum <br> dolor sit amet</b></p>
                                    <div class="smalltxt"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bgwh w-100 vh-100 d-flex text-xl-start">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title2">
                        <div class="kontentitlenew2">
                            <p class="greenfont">BERITA</p>
                            <div class="mbk2 text-black">
                            <b>Baca Berita Terbaru Kami<br>Dalam Tropisanimal</b>
                            </div>

                            <div class="squaregrey">
                                <div class="contentsq2">
                                    <img src="../img/x2/rick-l-037fCBgZB10-unsplash@2x.png" alt="tiger">
                                    <p><b>Apa Kabar Kebun Binatang<br>Saat Wabah Covid 19 ?</b></p>
                                    <div class="smalltxt2"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                            <div class="squaregrey">
                                <div class="contentsq2">
                                    <img src="../img/x2/hans-veth-o33FMDaXJS8-unsplash@2x.png" alt="tiger">
                                    <p><b>Anugrah Dari Hutan<br>Indonesia</b></p>
                                    <div class="smalltxt2"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                            <div class="squaregrey">
                                <div class="contentsq2">
                                    <img src="../img/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png" alt="tiger">
                                    <p><b>10 Hewan Herbivora<br>Yang Berbahaya</b></p>
                                    <div class="smalltxt2"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                            <div class="squaregrey">
                                <div class="contentsq2">
                                    <img src="../img/x2/smit-patel-dGMcpbzcq1I-unsplash@2x.png" alt="tiger">
                                    <p><b>4 Penyakit Yang Ditularkan<br>Hewan Ke Manusia</b></p>
                                    <div class="smalltxt2"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                            <div class="squaregrey">
                                <div class="contentsq2">
                                    <img src="../img/x2/TERUMBU-KARANG (1)@2x.png" alt="tiger">
                                    <p><b>Terumbu Karang:Pengertian,<br>Jenis, Sebaran, dan Masalah</b></p>
                                    <div class="smalltxt2"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                            <div class="squaregrey">
                                <div class="contentsq2">
                                    <img src="../img/x2/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png" alt="tiger">
                                    <p><b>Ternyata, Tanduk Rusa Berasal<br>dari Sel Kanker Tulang</b></p>
                                    <div class="smalltxt2"> ipsum dolor sit amet, consectetur adipisicing elit. Quas iste ea rerum possimus ipsam dolores ipsum</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bgwwht d-flex text-xl-start">
        <div class="kontainerlow">
            <div class="row">
                <div class="col">
                    <div class="title2">
                        <div class="kontentitlenew3">
                            <p>GALERI</p>
                            <div class="mbk3 text-black">
                                <b>Lihat Lebih Banyak Hewan Tropis<br>Pada Galeri Kami</b>
                            </div>
                            <div class="squareglr">
                                <img src="../img/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png" alt="bunglon" width="355">
                            </div>

                            <div class="squareglr">
                                <img src="../img/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png" alt="orangutan" width="355">
                            </div>

                            <div class="squareglr">
                                <img src="../img/x2/oscar-merchant-sCt1TLNIxFw-unsplash@2x.png" alt="penyu" width="355" height="253">
                            </div>

                            <div class="squareglr">
                                <img src="../img/x2/david-clode-0lwa8Dprrzs-unsplash@2x.png" alt="kakaktua" width="372" height="253" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
  <footer class="bg-black">
    <div class="container py-5">
        <div class="row wdt py-4">
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
