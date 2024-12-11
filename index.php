<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Company Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
    rel="stylesheet">
</head>

<body>
  <!-- navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">BurgerMania</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pesan">Pesan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- banner -->
  <div class="container-fluid banner d-flex align-items-center" id="home">
    <div class="text-content ms-auto">
      <h3 class="display-5">Burger Lezat <br>Fresh Setiap Gigitan!</h3>
      <h5 class="display-8">Kenikmatan Tiada Duanya di Setiap Lapisan</h5>
      <a href="#home">
        <button type="button" class="btn btn-danger btn-lg margin-top display-9 btn-custom">
          Beli Sekarang
        </button>
      </a>
    </div>
  </div>

  <!-- tentang -->
  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <h2 class="display-4 text-center" id="tentang">Tentang kami</h2>

      <div class="clearfix pt-5">
        <img
          src="https://media.istockphoto.com/id/1252796974/photo/bbq-hamburger-table-scene-top-view-over-dark-wood.jpg?s=612x612&w=0&k=20&c=7Q4IS7Kv6CtpgwaSaGlsMU1D4MLKB1WM_x7WUVURKQk="
          class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
        <h5><b>Tentang Burger Mania</b></h5>
        <p>
          Burger Mania didirikan pada tahun 2020 dengan visi untuk menyajikan burger berkualitas tinggi menggunakan
          bahan-bahan segar dan lokal. Kami berkomitmen untuk memberikan pengalaman kuliner yang tak terlupakan kepada
          setiap pelanggan.
        </p>
        <h5><b>Misi kami</b></h5>
        <ul>
          <li> Menyajikan burger dengan rasa yang unik dan berkualitas.</li>
          <li>Mengutamakan kepuasan pelanggan dengan pelayanan yang ramah.</li>
          <li>Mendukung petani lokal dengan menggunakan bahan baku segar.</li>
        </ul>
      </div>
    </div>
  </div>

  <!---Menu favorit-->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-5" id="menu">Menu favorit kami</h2>
      <p>
        Beberapa menu favorit kami yang akan membuat lidah anda ketagihan!
      </p>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4 text-center tim">
          <img src="https://cdn.pixabay.com/photo/2022/08/29/17/44/burger-7419420_1280.jpg"
            class="rounded-circle mb-3" />
          <h3>Double wooper</h3>
          <div class="card-footer text-center">
            <a href="#pesan" class="btn btn-dark">
              <i class="bi bi-cart-plus me-2"></i>Pesan sekarang
            </a>
          </div>
        </div>
        <div class="col-md-4 text-center tim">
          <img src="https://cdn.pixabay.com/photo/2022/12/19/01/08/burgers-7664547_1280.jpg"
            class="rounded-circle mb-3" />
          <h3>Tripple Cheese Beef</h3>
          <div class="card-footer text-center">
            <a href="#pesan" class="btn btn-dark">
              <i class="bi bi-cart-plus me-2"></i>Pesan sekarang
            </a>
          </div>
        </div>
        <div class="col-md-4 text-center tim">
          <img src="https://cdn.pixabay.com/photo/2022/07/15/18/16/beef-burger-7323692_1280.jpg"
            class="rounded-circle mb-3" />
          <h3>Cheese Burger</h3>
          <div class="card-footer text-center">
            <a href="#pesan" class="btn btn-dark">
              <i class="bi bi-cart-plus me-2"></i>Pesan sekarang
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row pt-4 gx-4 gy-4">
    <div class="col-md-4 text-center tim">
      <img
        src="https://media.istockphoto.com/id/1208134530/photo/fresh-burger-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=CD9SQk7_71R2wy5KNx5ertcAbMXXjnOmMKjtk4muajg="
        class="rounded-circle mb-3" />
      <h3>Beef Onion Burger</h3>
      <div class="card-footer text-center">
        <a href="#pesan" class="btn btn-dark">
          <i class="bi bi-cart-plus me-2"></i>Pesan sekarang
        </a>
      </div>
    </div>
    <div class="col-md-4 text-center tim">
      <img
        src="https://media.istockphoto.com/id/1190107705/photo/burger-on-white.jpg?s=612x612&w=0&k=20&c=netEEsJEepQPt2SayPE5Ona37M4TmNnajD_9WgaUr4A="
        class="rounded-circle mb-3" />
      <h3>Spicy Tandoori</h3>
      <div class="card-footer text-center">
        <a href="#pesan" class="btn btn-dark">
          <i class="bi bi-cart-plus me-2"></i>Pesan sekarang
        </a>
      </div>
    </div>
    <div class="col-md-4 text-center tim">
      <img
        src="https://media.istockphoto.com/id/1157515115/photo/cheeseburger-isolated-on-white.jpg?s=612x612&w=0&k=20&c=6f6jnWe3iGi2GinEvSJlDsqKbaYoRwj3vYChPCU96U4="
        class="rounded-circle mb-3" />
      <h3>Original Staker</h3>
      <div class="card-footer text-center">
        <a href="#pesan" class="btn btn-dark">
          <i class="bi bi-cart-plus me-2"></i>Pesan sekarang
        </a>
      </div>
    </div>
  </div>
  </div>

  <!-- Galeri kami -->
  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container text-center">
      <h2 class="display-4" id="galeri">Galeri Kami</h2>
      <div class="gallery-container pt-4">
        <div class="gallery-wrapper">
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1361782822/photo/front-view-of-many-delicious-juicy-hamburgers-with-meat-cutlet-and-vegetables.jpg?s=612x612&w=0&k=20&c=cXVOYATCuw93uWmDnB9ZyQKRG0U2EkPMbnxSY0HXl9w="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/488106782/photo/cooking-burgers-in-a-fastfood.jpg?s=612x612&w=0&k=20&c=eNGL6TKPpYEHDRJXZQTUWzCxpoDbODqrDaFNTCJfAas="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1791629330/id/foto/makan-siang-bisnis-dengan-burger-vegetarian-untuk-dua-wanita-saat-istirahat-makan-siang-bersama.jpg?s=612x612&w=0&k=20&c=Meq__qTf6L16qEtt3rH_8HTTyBm79WRZo9KS_weyEHQ="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1293369283/photo/hamburger-for-two.jpg?s=612x612&w=0&k=20&c=-fH8Mjc3-VufYhwEfMwb3jv2nhMZIhiFnO2ncDEvH6I="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1160806046/id/foto/bartender-menyiapkan-koktail-di-bar.jpg?s=612x612&w=0&k=20&c=AwY5agc3M6eOAzjwavdDvGk5exgbvscQusmUq1BwNBI="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/925156548/photo/bar-in-restaurant-decorate-in-modern-style.jpg?s=612x612&w=0&k=20&c=XsxErSyGnvtp46zFCnSsA-63kuD4weLkD2wQ-uxAM6I="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1207305983/photo/bakery-owner-working-on-cash-register.jpg?s=612x612&w=0&k=20&c=-lVlIZtxnZum_qki0II9Ta-JGBRMA58QRvyBHkaWkO8="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/2151327357/photo/hamburger-pizza-french-fries-coke-and-all-unhealthy-junk-fast-food.jpg?s=612x612&w=0&k=20&c=zueU8CYhzBmYUVjImwATVbCA3cQ4AWkOyj35twEe99w="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1354896857/photo/freshly-prepared-burger.jpg?s=612x612&w=0&k=20&c=_VX5aKfz1yLixnB1V-UEZqZ6bKAjBWGKS34TV_qp0x0="
              class="card-img-top" />
          </div>
          <div class="card crop-img">
            <img
              src="https://media.istockphoto.com/id/1468924637/photo/serving-burger.jpg?s=612x612&w=0&k=20&c=zF6Nlgc1rD1gtXjGMLLL-HoRpiczplrohESKIVk1Pfk=" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sosial media-->
  <div class="container-fluid client pt-5 pb-5">
    <div class="container text-center">
      <div class="row pt-4 gx-4 gy-4">
        <div class="col">
          <img
            src="https://www.pinclipart.com/picdir/big/194-1947602_whatsapp-logo-transparent-png-whatsapp-logo-vector-black.png" />
          <p>(021) 123-4567</p>
        </div>
        <div class="col">
          <img src="https://th.bing.com/th/id/OIP.Amcd6uomcBrkzfHXrg14gAHaHa?rs=1&pid=ImgDetMain" />
          <p>burgermania</p>
        </div>
        <div class="col">
          <img src="https://www.freepnglogos.com/uploads/twitter-x-logo-png/twitter-x-logo-png-9.png" />
          <p>burger_mania</p>
        </div>
        <div class="col">
          <img
            src="https://w7.pngwing.com/pngs/408/296/png-transparent-app-b-w-instagram-logo-media-popular-social-2018-social-media-black-and-white-logos-icon.png" />
          <p>@burgermania</p>
        </div>
        <div class="col">
          <img
            src="https://th.bing.com/th/id/R.d53ac1ce77084ccd2c30001737abdc82?rik=1Gx4SpeNupr%2fGg&riu=http%3a%2f%2ffreelogopng.com%2fimages%2fall_img%2f1657955547black-google-icon.png&ehk=zF7T6UJDJ36MmcZkMtj%2fHTeOTy%2bMPs28tUfBQN2KENM%3d&risl=&pid=ImgRaw&r=0" />
          <p>www.burgermania.com</p>
        </div>
      </div>
    </div>
  </div>

  <!-- pesan -->
  <div class="container-fluid pt-5 pb-5 kontak">
    <div class="container">
      <h2 class="display-3 text-center" id="kontak">Pesan sekarang</h2>
      <br>
      <form class="" action="proses.php" method="post">
      <div class="row pb-3">
        <div class="col-md-6">
           <label for="">Nama</label>
           <input type="text" name="nama" autocomplete = "off"><br>
           <label for="">Alamat</label>
           <input type="text" name="alamat" autocomplete = "off"><br>
           <label for="">Nama</label>
           <input type="text" name="nama" autocomplete = "off"><br>
           <label for="">Nama</label>
           <input type="text" name="nama" autocomplete = "off"><br>
        
          
         
        </div>
        <div class="col-md-6">
          <textarea class="form-control form-control-lg" rows="5"></textarea>
        </div>
      </div>
      <div class="col-md-3 mx-auto text-center">
        <button type="button" class="btn btn-danger btn-lg">
          Pesan
        </button>
      </div>
    </div>
  </div>
</body>

</html>