<?php
include 'header.php';
include 'baglan.php';
$query = "select * from diziler;";
$result = $conn->query($query);

$yabanci_dizi = array();
$netflix = array();
$bilim_kurgu = array();
$turk_dizi = array();
$filmlovers_okur = array();
$carpici_dizi = array();

while($row = $result->fetch_assoc())
{
  if($row['dizi_kategori'] == "yabanci_dizi"){
    array_push($yabanci_dizi, $row);
  }
  if($row['dizi_kategori'] == "netflix"){
    array_push($netflix, $row);
  }
  if($row['dizi_kategori'] == "bilim_kurgu"){
    array_push($bilim_kurgu, $row);
  }
  if($row['dizi_kategori'] == "turk_dizi"){
    array_push($turk_dizi, $row);
  }
  if($row['dizi_kategori'] == "filmlovers_okur"){
    array_push($filmlovers_okur, $row);
  }
  if($row['dizi_kategori'] == "carpici_dizi"){
    array_push($carpici_dizi, $row);
  }
} ?>

<section id="features" class="sectionArea">
            <div class="featuresTop">
                <h2 class="sectionHeader">DİZİLER</h2>
                <p>Biri dizi önerisi mi istedi? </p>
            </div>
 
            <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/diziliste1.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>EN İYİ YABANCI DİZİLER</h3>
                                <p>
                                <?php foreach($yabanci_dizi as $yabanci){
                                        echo $yabanci['dizi_adi'] . "<br>";
                                    } ?>
                                    </p>
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/diziliste2.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>EN POPÜLER NETFLİX DİZİLERİ</h3>
                                <p>
                                <?php foreach($netflix as $netf){
                                        echo $netf['dizi_adi'] . "<br>";
                                    } ?>
                                    </p>
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/diziliste3.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>EN BEĞENİLEN BİLİMKURGU DİZİLERİ</h3>
                                <p>
                                <?php foreach($bilim_kurgu as $bilim){
                                        echo $bilim['dizi_adi'] . "<br>";
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
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/diziliste4.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>IMBD'ye GÖRE EN İYİ TÜRK DİZİLERİ</h3>
                                <p>
                                <?php foreach($turk_dizi as $turk){
                                        echo $turk['dizi_adi'] . "<br>";
                                    } ?>
                                    </p>
                           
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/diziliste5.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>FİLMLOVERS OKURLARINA GÖRE GELMİŞ GEÇMİŞ EN İYİ YABANCI DİZİLER</h3>
                                <p>
                                <?php foreach($filmlovers_okur as $filmlovers){
                                        echo $filmlovers['dizi_adi'] . "<br>";
                                    } ?>
                                    </p>
                         
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/diziliste6.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>GERÇEK HİKAYELERDEN UYARLANAN ÇARPICI DİZİLER</h3>
                                <p>
                                <?php foreach($carpici_dizi as $carpici){
                                        echo $carpici['dizi_adi'] . "<br>";
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