<?php
$name = "Muhammad Ikram Jundulloh";
$email = "ikramjundulloh@gmail.com";
$phone = +6234567890;
$photo_url = "https://images.unsplash.com/photo-1711064644461-e8607629e20e?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";
$address = "Jl. Kh Abdul hamid km 9 kecamatan Pamijahan Kabupaten Bogor";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 6</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <style>
    :root{
    --biru-cerahr: #4596b1;
    --biru-muda: #c7e1ff;
    --header:#434343;
}
  </style>
  <body >
    <!-- header -->
    <div class="text-center  p-5 text-light" style="background-color: var(--header);">
        <div class="container">
            <h1>Welcome To My Website.</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus laborum repellendus error nihil iure quos.</p>
        </div>
       
    </div>
    <!-- akhir header -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  sticky-top " style="background-color: var(--biru-muda);">
        <div class="container">
          <a class="navbar-brand fs-4" href="#"><i class="bi bi-fast-forward-fill "></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-4" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link "  aria-current ="page" href="datatables.php">DataTables</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- akhir nav -->


<!-- profile diri -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card  mt-5 mb-5">
        <div class="card-header text-center" style="background-color: var(--header);">
          <h1 class="text-light">Profile Diri</h1>
          <p class="text-light">Ini Tugas 1 PHP</p>
        </div>
        <div class="card-body d-flex justify-content-between align-items-center" style="background-color: var(--biru-muda);">
          <div class="text-left">
            <p class="card-text"><strong>Nama:</strong> <?php echo $name; ?></p>
            <p class="card-text"><strong>Email:</strong> <?php echo $email; ?></p>
            <p class="card-text"><strong>Nomor Telepon:</strong> <?php echo $phone; ?></p>
            <p class="card-text"><strong>Alamat:</strong> <?php echo $address; ?></p>
          </div>
          <div style="max-width: 150px;">
            <img src="<?php echo $photo_url; ?>" alt="Foto Profil" class="img-fluid ">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- akhir profile diri -->


<!-- main -->
<div class="text-center text-light  p-5" style="background-color: var(--biru-cerahr);">
    <div class="container">
        <h1>My Class.</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus laborum repellendus error nihil iure quos.</p>
    </div>
<div class="d-flex justify-content-around">

    <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y291cnNlfGVufDB8fDB8fHww" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvdXJzZXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1523289333742-be1143f6b766?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGNvdXJzZXxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      </div>
</div>

      <!-- progress -->
      <div  style="background-color: var(--header); " class="text-light p-5">
        <h1 class="text-center">My Skills</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, autem!</p>
        <div class="container ">
          <label class="mb-2 fw-bolder">Programming</label>
          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar" style="width: 75%; background-color: var(--biru-cerahr);">75%</div>
            </div>
        </div>
        <div class="container ">
          <label class="mb-2 fw-bolder"> ENGLISH</label>
          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar" style="width: 85%; background-color: var(--biru-cerahr);" >85%</div>
            </div>
        </div>
        <div class="container ">
          <label class="mb-2 fw-bolder">Design</label>
          <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar" style="width: 45%; background-color: var(--biru-cerahr);">45%</div>
            </div>
        </div>
        
      </div>
    
      <!-- akhirprogress -->
      <footer class="footer p-2" style="background-color: var(--biru-muda);">
        <div class="container text-center">
          <span class="text-dark fw-bolder">© 2024 Tugas6</span>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>