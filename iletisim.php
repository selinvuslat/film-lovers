<?php
include 'header.php';
include 'baglan.php';
?>


<!--MAIN SECTION-->
        
        <section id="contactSlider" class="slider">
           <div id="contactCaption" class="caption">
               <h1>İLETİŞİM</h1>
               <p>Bize Ulaşın.</p>
           </div>  
        </section>
        
        <!-- GALLEY SECTION-->
        
        <section id="gallery" class="sectionArea">
            <div class="galleryTop">
                <h2 class="sectionHeader">GALERİ</h2>
                   <p><br><br> </p>
                    </div>     
                    <div class="galleryBody">
                        <div class="container">
                            <div class="gallerySlider">
                                <div class="gallerySliderItem">
                                   <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/galeri1.jpg">
                                    <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/starwars.jpg">
                                    <img src="https://calasumyserverbucket.s3.amazonaws.com/odev/galeri.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
  
        <!--FORM SECTION-->
        
        <section id="contact" class="sectionArea">
               <div class="contactTop">
                <h2 class="sectionHeader">İLETİŞİM</h2>
                   <p>Bize Ulaşın.<br><br> </p>
                    </div> 
                    <div class="contactBody">
                        <div class="container">
                            <div class="wrapper">
                                <form method="post"  class="contactForm">
 
                                    <div class="formItem">
                                        <span class="formShape">
                                            <i class="fa fa-user fa-2x">
                                            </i>
                                        </span>
                                         <input class="formField" name="ad" type="text" placeholder="Adınız" required>
                                    </div>
                                      <div class="formItem">
                                        <span class="formShape">
                                            <i class="fa fa-envelope fa-2x">
                                            </i>
                                        </span>
                                         <input class="formField" name="mail" type="email" placeholder="Mail Adresiniz" required>
                                    </div>
                                      <div class="formItem">
                                        <span class="formShape">
                                            <i class="fa fa-mobile-phone fa-2x">
                                            </i>
                                        </span>
                                         <input class="formField" name="telefon" type="text" placeholder="Telefon Numarası">
                                    </div>
                                      <div class="formItem">
                                        <span class="formShape">
                                            <i class="fa fa-info fa-2x">
                                            </i>
                                        </span>
                                         <input class="formField" name="konu" type="text" placeholder="Konu" required>
                                    </div>
                                      <div class="formItem">
                                        <span class="formShape">
                                            <i class="fa fa-comment fa-2x">
                                            </i>
                                        </span>
                                          <textarea class="formField"  name="mesaj" rows="8" placeholder="Ileti"> </textarea>
                                    </div>
                                    <div class="formItem">
                                        <input class="formBtn" type="submit" value="Kaydet">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            
        </section>
        
        
<?php

include 'footer.php';

?>