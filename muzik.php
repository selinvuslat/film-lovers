<?php
include 'header.php';
include 'baglan.php';
$query = "select * from sarkilar;";
$result = $conn->query($query);

$turkce_pop = array();
$rap_sarki = array();
$rock_sarki = array();
$ergenlik = array();
$hit2020 = array();
$huzur_sarki = array();

while($row = $result->fetch_assoc())
{
  if($row['sarki_kategori'] == "turkce_pop"){
    array_push($turkce_pop, $row);
  }
  if($row['sarki_kategori'] == "rap_sarki"){
    array_push($rap_sarki, $row);
  }
  if($row['sarki_kategori'] == "rock_sarki"){
    array_push($rock_sarki, $row);
  }
  if($row['sarki_kategori'] == "ergenlik"){
    array_push($ergenlik, $row);
  }
  if($row['sarki_kategori'] == "hit2020"){
    array_push($hit2020, $row);
  }
  if($row['sarki_kategori'] == "huzur_sarki"){
    array_push($huzur_sarki, $row);
  }
}
 ?>

<section id="features" class="sectionArea">
            <div class="featuresTop">
                <h2 class="sectionHeader">MÜZİK</h2>
                <p>Her şarkıda hayatımızdan, içinde olduğumuz zamanlardan bir şeyler vardır aslında. </p>
            </div>
 
            <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/müzik1.jpeg">       
                            </div>
                            <div class="itemText">
                                <h3>90'lar TÜRKÇE POP LİSTESİ</h3>
                                <p>
                                <?php foreach($turkce_pop as $turkce){
                                        echo $turkce['sarki_adi'] . "<br>";
                                    } ?>
                                    </p>
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/müzik2.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>EN POPÜLER RAP ŞARKI LİSTESİ</h3>
                                <p>
                                <?php foreach($rap_sarki as $rap){
                                        echo $rap['sarki_adi'] . "<br>";
                                    } ?>
                                    </p>
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/müzik3.jpeg">       
                            </div>
                            <div class="itemText">
                                <h3>70'li YILLARA DAMGA VURMUŞ ROCK ŞARKILAR</h3>
                                <p>
                                <?php foreach($rock_sarki as $rock){
                                        echo $rock['sarki_adi'] . "<br>";
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
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/müzik4.jpeg">       
                            </div>
                            <div class="itemText">
                                <h3>BİR NESLİN ERGENLİK DÖNEMİNE DAMGA VURAN ŞARKILAR</h3>
                                <p>
                                <?php foreach($ergenlik as $ergen){
                                        echo $ergen['sarki_adi'] . "<br>";
                                    } ?>
                                    </p>
                           
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/müzik5.jpeg">       
                            </div>
                            <div class="itemText">
                                <h3>2020'de DİNLENEN HİT ŞARKILAR</h3>
                                <p>
                                <?php foreach($hit2020 as $hit){
                                        echo $hit['sarki_adi'] . "<br>";
                                    } ?>
                                    </p>
                         
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/müzik6.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>YOGA VE MEDİTASYONUNUZA HUZUR KATACAK ŞARKILAR</h3>
                                <p>
                                <?php foreach($huzur_sarki as $huzur){
                                        echo $huzur['sarki_adi'] . "<br>";
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