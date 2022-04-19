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
}

if($_POST){
  $sql = 0;

  if(!empty($_POST['yabanci_yeni'])){
    $sql = "INSERT INTO diziler (dizi_adi, dizi_kategori) VALUES ('".htmlentities($_POST['yabanci_yeni'])."', 'yabanci_dizi')";
  }
  else if(!empty($_POST['netflix_yeni'])){
    $sql = "INSERT INTO diziler (dizi_adi, dizi_kategori) VALUES ('".htmlentities($_POST['netflix_yeni'])."', 'netflix')";
  }
  else if(!empty($_POST['bilim_yeni'])){
    $sql = "INSERT INTO diziler (dizi_adi, dizi_kategori) VALUES ('".htmlentities($_POST['bilim_yeni'])."', 'bilim_kurgu')";
  }
  else if(!empty($_POST['turk_yeni'])){
    $sql = "INSERT INTO diziler (dizi_adi, dizi_kategori) VALUES ('".htmlentities($_POST['turk_yeni'])."', 'turk_dizi')";
  }
  else if(!empty($_POST['filmlovers_yeni'])){
    $sql = "INSERT INTO diziler (dizi_adi, dizi_kategori) VALUES ('".htmlentities($_POST['filmlovers_yeni'])."', 'filmlovers_okur')";
  }
  else if(!empty($_POST['carpici_yeni'])){
    $sql = "INSERT INTO diziler (dizi_adi, dizi_kategori) VALUES ('".htmlentities($_POST['carpici_yeni'])."', 'carpici_dizi')";
  }

  if($sql){
    $ekle = $conn->query($sql);
  
    if($ekle){
      echo "Başarılı";
    } else {
      echo "Başarısız";
    }
  }

  header("Refresh:0");
}

if($_GET){
  if($_GET['sil'] != ''){
    $sql = "delete from diziler where dizi_id = ". $_GET['sil'];

    $sil = $conn->query($sql);
    if($sil){
      echo "Başarılı";
    } else {
      echo "Başarısız";
    }

    header("Refresh:0; url=dizi-duzenle.php");
  }
}

?>

<form method="POST">
<section id="features" class="sectionArea">
        <div class="featuresTop">
            <h2 class="sectionHeader">DİZİLERİ DÜZENLE</h2>
        </div>
        <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>EN İYİ YABANCI DİZİLER</h3>
                                <?php foreach ($yabanci_dizi as $yabanci){ ?>
                                  <input type="text" name="dizi_<?php echo $yabanci['dizi_id']; ?>" value="<?php echo $yabanci['dizi_adi']; ?>">
                                  <a href="dizi-duzenle.php?sil=<?php echo $yabanci['dizi_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="yabanci_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>EN POPÜLER NETFLİX DİZİLERİ</h3>
                                <?php foreach ($netflix as $netf){ ?>
                                  <input type="text" name="dizi_<?php echo $netf['dizi_id']; ?>" value="<?php echo $netf['dizi_adi']; ?>">
                                  <a href="dizi-duzenle.php?sil=<?php echo $netf['dizi_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="netflix_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>EN BEĞENİLEN BİLİM KURGU DİZİLERİ</h3>
                                <?php foreach ($bilim_kurgu as $bilim){ ?>
                                  <input type="text" name="dizi_<?php echo $bilim['dizi_id']; ?>" value="<?php echo $bilim['dizi_adi']; ?>">
                                  <a href="dizi-duzenle.php?sil=<?php echo $bilim['dizi_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="bilim_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>IMDB'YE GÖRE EN İYİ TÜRK DİZİLERİ</h3>
                                <?php foreach ($turk_dizi as $turk){ ?>
                                  <input type="text" name="dizi_<?php echo $turk['dizi_id']; ?>" value="<?php echo $turk['dizi_adi']; ?>">
                                  <a href="dizi-duzenle.php?sil=<?php echo $turk['dizi_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="turk_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>FILMLOVERS OKURLARINA GÖRE GELMİŞ GEÇMİŞ EN İYİ YABANCI DİZİLER</h3>
                                <?php foreach ($filmlovers_okur as $filmlovers){ ?>
                                  <input type="text" name="dizi_<?php echo $filmlovers['dizi_id']; ?>" value="<?php echo $filmlovers['dizi_adi']; ?>">
                                  <a href="dizi-duzenle.php?sil=<?php echo $filmlovers['dizi_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="filmlovers_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>GERÇEK HİKAYELERDEN UYARLANAN ÇARPICI DİZİLER</h3>
                                <?php foreach ($carpici_dizi as $carpici){ ?>
                                  <input type="text" name="dizi_<?php echo $carpici['dizi_id']; ?>" value="<?php echo $carpici['dizi_adi']; ?>">
                                  <a href="dizi-duzenle.php?sil=<?php echo $carpici['dizi_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="carpici_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</section>
</form>

<?php
include 'footer.php';
