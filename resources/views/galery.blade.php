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
                    <b>Galeri</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bgwhte w-100 vh-100 d-flex text-xl-start mt-1">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/x1/Group 77.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/x1/pascal-muller2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/x1/pascal-muller2.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

    <div class="bgwhte w-100 vh-100 d-flex text-xl-start ">
        <div class="container">
            <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/mathew-schwartz-OjQgsR1oyEw-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>


              <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/vladimir-kudinov-vmlJcey6HEU-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>

              <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>

              <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/david-clode-0lwa8Dprrzs-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>
        </div>
    </div>

    <div class="bgwhte d-flex text-xl-start marginglr">
        <div class="container">
            <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/david-clode-AtCChdVhAmA-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>


              <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>

              <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/TERUMBU-KARANG (1).png"  width="600" height="400">
                  </a>
                </div>
              </div>

              <div class="responsive">
                <div class="galleryni">
                  <a target="_blank" href="#">
                    <img src="img/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png"  width="600" height="400">
                  </a>
                </div>
              </div>
        </div>
    </div>



     <!-- Footer -->
  <footer class="bgblack">
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
