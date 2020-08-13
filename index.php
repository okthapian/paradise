<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paradise</title>

    <!-- <link rel="stylesheet" href="css/demo.css"/> -->
    
    <link rel="stylesheet" href="http://www.getorgchart.com/GetOrgChart/getorgchart/getorgchart.css"/>
   <script src="http://www.getorgchart.com/GetOrgChart/getorgchart/getorgchart.js"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body style="background-color:#cce6ff;">
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php?halaman=home">Paradise</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=about"><font color="white">About</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=contact"><font color="white">Contact</font></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <font color="white">Struktur Organisasi</font>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="index.php?halaman=bph">Badan Pengurus Harian(BPH)</a>
                <a class="dropdown-item" href="index.php?halaman=senior">Bidang seni dan olahraga(Senior)</a>
                <a class="dropdown-item" href="index.php?halaman=ekuin">Bidang Ekonomi,Keuangan dan Investasi(Ekuin)</a>
                <a class="dropdown-item" href="index.php?halaman=humper">Bidang Humas dan Pemerhati dan Harmonisasi(humper)</a>
                <a class="dropdown-item" href="index.php?halaman=internal">Bidang Internal</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=proker"><font color="white">Program Kerja</font></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?halaman=oprec"><font color="white">Open Recruitment</font></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- ============================================BODY======================================= -->
    <?php
      switch (@$_GET['halaman']) {
        case 'home':
          include"home.php";
          break;
        case 'about':
          include"about.php";
          break;
        case 'contact':
          include"contact.php";
          break;
        case 'bph':
          include"st_bph.php";
          break;
        case 'senior':
          include"senior.php";
          break;
        case 'ekuin':
          include"ekuin.php";
          break;
        case 'humper':
          include"humper.php";
          break;
        case 'internal':
          include"internal.php";
          break;
        case 'proker':
          include"proker.php";
          break;
        case 'baca':
          include"baca.php";
          break;
        case 'oprec':
          include"oprec.php";
          break;
        default:
          include"home.php";
          break;
      }
    ?>
<!-- ============================================BODY======================================= -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Paradise(Persatuan Anak Dairi Semarang)_2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
