<?php
include 'header.php';
include 'baglan.php';
$query = "select * from filmler;";
$result = $conn->query($query);

$turk_filmleri = array();
$basyapit_film = array();
$biyografi_filmi = array();
$korku_filmi = array();
$aksiyon = array();
$marvel = array();

while($row = $result->fetch_assoc())
{
  if($row['film_kategori'] == "turk_filmleri"){
    array_push($turk_filmleri, $row);
  }
  if($row['film_kategori'] == "basyapit_film"){
    array_push($basyapit_film, $row);
  }
  if($row['film_kategori'] == "biyografi_filmi"){
    array_push($biyografi_filmi, $row);
  }
  if($row['film_kategori'] == "korku_filmi"){
    array_push($korku_filmi, $row);
  }
  if($row['film_kategori'] == "aksiyon"){
    array_push($aksiyon, $row);
  }
  if($row['film_kategori'] == "marvel"){
    array_push($marvel, $row);
  } 
} ?>

<section id="features" class="sectionArea">
        <div class="featuresTop">
            <h2 class="sectionHeader">FİLMLER</h2>
            <p>Evde kaldığın bu süreçte izleyebileceğin film listeleri </p>
        </div>
 
            <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film1.jpeg">
                            </div>
                            <div class="itemText">
                                <h3>IMBD'ye GÖRE EN İYİ TÜRK FİLMLERİ</h3>
                                <p>
                                    <?php foreach($turk_filmleri as $turk){
                                        echo $turk['film_adi'] . "<br>";
                                    } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film2.jpeg">
                            </div>
                            <div class="itemText">
                                <h3>MUTLAKA İZLENMESİ GEREKEN BAŞYAPIT FİLMLER</h3>
                                <p>
                                    <?php foreach($basyapit_film as $basyapit){
                                        echo $basyapit['film_adi'] . "<br>";
                                    } ?>
                                </p>
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film3.jpeg">
                            </div>
                            <div class="itemText">
                                <h3>IMDB’ye GÖRE EN İYİ BİYOGRAFİ FİLMLERİ</h3>
                                <p>
                                    <?php foreach($biyografi_filmi as $biyografi){
                                        echo $biyografi['film_adi'] . "<br>";
                                    } ?>
                                </p>
                            </div> 
                        </div>
                    </div>
                </div>
             </div>
        </section>
    
            <section>
            <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film4.jpeg">
                            </div>
                            <div class="itemText">
                                <h3>EN İYİ KORKU FİLMLERİ</h3>
                                <p>
                                    <?php foreach($korku_filmi as $korku){
                                        echo $korku['film_adi'] . "<br>";
                                    } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film5.jpeg">
                            </div>
                            <div class="itemText">
                                <h3>AKSİYONU TAVAN YAPTIRAN ENFES FİLMLER</h3>
                                <p>
                                    <?php foreach($aksiyon as $aks){
                                        echo $aks['film_adi'] . "<br>";
                                    } ?>
                                </p>
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film6.jpeg">
                            </div>
                            <div class="itemText">
                                <h3>IMDB’ye GÖRE EN İYİ MARVEL FİLMLERİ</h3>
                                <p>
                                    <?php foreach($marvel as $marv){
                                        echo $marv['film_adi'] . "<br>";
                                    } ?>
                                </p>
                            </div> 
                        </div>
                    </div>
                </div>
             </div>
        </section>
<?php

include 'footer.php';

?>