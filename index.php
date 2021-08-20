<!doctype html>
<html lang="id" class=" ">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pantau Corona</title>

  </head>
  <body class="body">
    
 <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container">  
    <a class="navbar-brand" href="#"><b>Pantau Corona</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
        </ul>
      </div> -->
  </div>
</nav>
<!-- End Navbar -->

<div class="jumbotron bg-light">
  <div class="container">
      <br>
      <h1 class="display-4 text-center judul-jbt">PANTAU CORONA</h1>
      <p class="lead m-0 text-center text-jbt">Situs ini berisi informasi & data mengenai virus Corona</p>
    </div>
  </div>
  
<div class="container">
  <div class="row">

    <div class="col-md-4">
      <div class="card img-card box-primary-shadow kartu-positif">
        <div class="card-body">
          <div class="d-flex">
            <div class="text white">
              <p class="text-white mb-0">TOTAL POSITIF<p>
                <h2 id="data-kasus" class="mb-0 number-font text-white">0</h2>
                <p class="text-white mb-0">ORANG</p>
            </div>
            <div class="ml-auto">
              <img src="img/rs.png" width="80" height="80" alt="positif">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card img-card box-primary-shadow kartu-meninggal">
        <div class="card-body">
          <div class="d-flex">
            <div class="text white">
              <p class="text-white mb-0">TOTAL MENINGGAL<p>
                <h2 id="data-mati" class="mb-0 number-font text-white">0</h2>
                <p class="text-white mb-0">ORANG</p>
            </div>
            <div class="ml-auto">
              <img src="img/makam.png" width="130" height="90" alt="death">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card img-card box-primary-shadow kartu-sembuh">
        <div class="card-body">
          <div class="d-flex">
            <div class="text white">
              <p class="text-white mb-0">TOTAL SEMBUH<p>
                <h2 id="data-sembuh" class="mb-0 number-font text-white">0</h2>
                <p class="text-white mb-0">ORANG</p>
            </div>
            <div class="ml-auto">
              <img src="img/happy.svg" width="80" height="80" alt="cure">
            </div>
          </div>
        </div>
      </div>
    </div>
    
      <div class="div-indo">
        <div class="card bg-warning img-card box-primary-shadow kartu-indo">
          <div class="card-body">
            <div class="d-flex">
              <div class="text white">
                <h2 class="text-white mb-0">INDONESIA</h2>
                  <p id="data-id" class="mb-0 number-font text-white">0</p>
              </div>
              <div class="ml-auto">
                <img src="img/indonesia.svg" style="width: 120px;">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div> 
<!-- AKHIR ROW -->
<!-- AKHIR CONTAINER -->
<!-- <div class="container mt-5">
  <div class="card">
      <div class="card-header text-center bg-white kartu1">
       <h3>Data Berdasarkan Provinsi</h3>
      </div>
      <div class="card-body">
        <div style="height: 500px; overflow: auto;">
          <table class="table table-striped table-bordered table-hover">
            <thead class="thead bg-dark text-white">
              <th class="bg-dark jdl-th">No</th>
              <th class="bg-dark jdl-th">Provinsi</th>
              <th class="bg-dark jdl-th">Positif</th>
              <th class="bg-dark jdl-th">Sembuh</th>
              <th class="bg-dark jdl-th">Meninggal</th>
            </thead>
            <tbody id="table-data"></tbody>
          </table>
        </div>
      </div>
  </div>
</div> -->

<div class="container mt-5">
  <div class="card">
      <div class="card-header text-center bg-white kartu2">
       <h3>Data Berdasarkan Global</h3>
      </div>
      <div class="card-body">
        <div style="height: 500px; overflow: auto;">
          <table class="table table-striped table-bordered table-hover">
            <thead class="thead bg-dark text-white">
              <th class="bg-dark jdl-th">No</th>
              <th class="bg-dark jdl-th">Negara</th>
              <th class="bg-dark jdl-th">Positif</th>
              <th class="bg-dark jdl-th">Sembuh</th>
              <th class="bg-dark jdl-th">Meninggal</th>
            </thead>
            <tbody id="table-data_glob"></tbody>
          </table>
        </div>
      </div>
  </div>
</div>

<!-- <div class="container mt-5">
  <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h4 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Pengertian Corona
        </button>
        </h4>
      </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. 
          Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga 
          penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ 
          Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan pada manusia sejak 
          kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute 
          Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 
          (COVID-19).<br></p>
        </div>
      <div>
    </div>
  </div>
</div> -->

<div class="container mt-5">
  <div id="accordion">
    <div class="card akorsi1">
      <div class="card-header" id="headingOne">
        <h3 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Pengertian Corona
          </button>
        </h3>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. 
          Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga 
          penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ 
          Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan pada manusia sejak 
          kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute 
          Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 
          (COVID-19)</p>
        </div>
      </div>
    </div>
    <div class="card akorsi2">
      <div class="card-header" id="headingTwo">
        <h3 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Gejala Corona
          </button>
        </h3>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          <p>Gejala umum berupa demam ≥380C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari 
          sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah 
          merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan dilakukan 
          pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya. Daftar negara terjangkit dapat 
          dipantau melalui</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

    <div class="col-md-6 mt-5">
      <a href="https://www.unicef.org/indonesia/id/coronavirus">
        <div class="card kartu-tautan1">
          <div class="card-body">
            <h6  class="card-title">Novel Coronavirus (COVID-19): Hal-Hal Yang Perlu Anda Ketahui</h6>
            <p class="card-text">Unicef Indonesia</p>
          </div>
        </div>
    </div>

    <div class="col-md-6 mt-5">
      <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
        <div class="card kartu-tautan2">
          <div class="card-body">
            <h6  class="card-title">Coronavirus Disease (COVID-19) Advice For The Public</h6>
            <p class="card-text">WHO</p>
          </div>
        </div>
    </div>

    <div class="col-md-6 mt-5">
      <a href="https://infeksiemerging.kemkes.go.id/">
        <div class="card kartu-tautan3">
          <div class="card-body">
            <h6  class="card-title">Media Informasi Resmi Penyakit Infeksi Emerging</h6>
            <p class="card-text">Kementrian Kesehatan</p>
          </div>
        </div>
    </div>

    <div class="col-md-6 mt-5">
      <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
        <div class="card kartu-tautan4">
          <div class="card-body">
            <h6  class="card-title">Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona</h6>
            <p class="card-text">Kompas</p>
          </div>
        </div>
    </div>
  </div>
</div>



        
<footer class="bg-info text-center text-white mt-5">
  &copy; Muhammad Rizky Pamungkas
</footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="scripts.js"></script> 
  </body>
</html>