<?php
include 'header.php';
include 'baglan.php';
$sql="select * from anasayfa";
$result=mysqli_query($conn,$sql);
while($row =mysqli_fetch_assoc($result)){ ?>


  <!--MAIN SECTION-->
        <section id="mainSlider" class="slider">
           <div id="mainCaption" class="caption">
               <h1>Sinema, duygular, düşler ve içgüdü dünyalarını anlatmak için en iyi araçtır. - Luis Bunuel</h1>
               <p>Müzik hayatın neşesi, ruhun, sevinci ve her şeyidir.</p>
           </div>  
        </section>
       
        
        <!--FEATURE SECTİON-->
        
        <section id="features" class="sectionArea">
            <div class="featuresTop">
                <h2 class="sectionHeader">ÖNERİLERİMİZ</h2>
                <p>Sitemizden film, müzik ve dizi önerilerimizi inceleyebilirsiniz. </p>
            </div>
            <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/film.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>FILMLER</h3>
                                <p><?php echo $row["f_baslik1"];   ?><br>
                                    <?php echo $row["f_baslik2"];   ?><br>
<?php echo $row["f_baslik3"];   ?><br>
<?php echo $row["f_baslik4"];   ?></p>
                           <a href=film.php>Daha Fazla...</a>
                            </div>
                        </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/dizi.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>DIZILER</h3>
                                <p> <?php echo $row["d_baslik1"];   ?><br>
                       <?php echo $row["d_baslik2"];   ?><br>
                      <?php echo $row["d_baslik3"];   ?><br>
                       <?php echo $row["d_baslik4"];   ?>
                        </p>
                           <a href=dizi.php>Daha Fazla...</a>
                            </div>
                         </div>
                    </div>
                             <div class="col3">
                        <div class="item">
                            <div class="zoom">
                               <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/muzik.jpg">       
                            </div>
                            <div class="itemText">
                                <h3>MUZIKLER</h3>
                                <p><?php echo $row["m_baslik1"];   ?><br>
                                   <?php echo $row["m_baslik2"];   ?><br>
                                   <?php echo $row["m_baslik3"];   ?><br>
                                   <?php echo $row["m_baslik4"]; }  ?><br>
                                
                                    
                                </p>
                           <a href=muzik.php>Daha Fazla...</a>
                            </div> 
                        </div>
                    </div>
                </div>
             </div>
        </section>
        
        <!-- PARALLAX SECTION-->
        <section id="parallax" class="sectionArea">
            <div class="parallaxTop">
                <h2 class="sectionHeader">HOŞGELDİNİZ</h2>
                <p>Acaba ne izlesem ya da ne dinlesem diye saatlerce düşünmeyin önerilerimize bakın!</p>
            </div>
        </section>
        
        <!--ENGINE SECTION-->
        <section id="engine" class="sectionArea">
            <div class="engineTop">
                <h2 class="sectionHeader">EN İYİLER</h2>
                  <p>En Beğenilen İçerikler Her Ay ve Her Hafta Başı Güncellenmektedir.</p></div>
                  <div class="engineBody">
                      <div class="container">
                          <div class="col2">
                              <div class="engineContainer">
                                  <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/joker.jpg" class="imageOver">
                                  <div class="engineOverlay">
                                      <div class="engineText">Ayın En Beğenilen Filmi</div>
                                  </div>
                              </div>
                          </div>
                           <div class="col2">
                              <div class="engineContainer">
                                  <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/once.jpg" class="imageOver">
                                  <div class="engineOverlay2">
                                      <div class="engineText">Haftanın En Beğenilen Filmi</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>         
        </section>


<?php

include 'footer.php';

?>