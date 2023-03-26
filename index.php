<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=37ae3863&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>MOVIES</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title"> Unlocked </h5>
        <p class="card-text">A woman's life is turned upside-down when a dangerous man gets a hold of her lost cell phone and uses it to track her every move.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar2.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title"> The Ice Road </h5>
        <p class="card-text">Setelah tambang berlian terpencil runtuh di wilayah utara Jauh Kanada, seorang sopir es memimpin misi penyelamatan yang mustahil di atas lautan beku untuk menyelamatkan nyawa para penambang yang terperangkap meskipun air mencair dan ancaman yang tidak pernah mereka lihat datang.

</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar3.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title"> Plane </h5>
        <p class="card-text">Seorang pilot menemukan dirinya terjebak di zona perang setelah dia dipaksa untuk mendaratkan pesawat komersialnya selama badai yang mengerikan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar4.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title"> Supercell </h5>
        <p class="card-text">A teenage boy runs away to follow his fathers footsteps, legendary storm chaser Bill Brody.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar5.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title"> The Good Dinosaur </h5>
        <p class="card-text">"The Good Dinosaur" asks the question: What if the asteroid that forever changed life on Earth missed the planet completely and giant dinosaurs never became extinct? In this epic journey into the world of dinosaurs, an Apatosaurus named Arlo makes an unlikely human friend. While travelling through a harsh and mysterious landscape, Arlo learns the power of confronting his fears and discovers what he is truly capable of.

</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar6.jpg" class="card-img-top" height="450px">
      <div class="card-body">
        <h5 class="card-title"> M3gan </h5>
        <p class="card-text">Seorang insinyur robotika di sebuah perusahaan mainan membangun boneka seperti kehidupan yang mulai mengambil kehidupannya sendiri.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
