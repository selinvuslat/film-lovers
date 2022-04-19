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

if($_POST){
  $sql = 0;

  if(!empty($_POST['turkce_pop_yeni'])){
    $sql = "INSERT INTO sarkilar (sarki_adi, sarki_kategori) VALUES ('".htmlentities($_POST['turkce_pop_yeni'])."', 'turkce_pop')";
  }
  else if(!empty($_POST['rap_sarki_yeni'])){
    $sql = "INSERT INTO sarkilar (sarki_adi, sarki_kategori) VALUES ('".htmlentities($_POST['rap_sarki_yeni'])."', 'rap_sarki')";
  }
  else if(!empty($_POST['rock_yeni'])){
    $sql = "INSERT INTO sarkilar (sarki_adi, sarki_kategori) VALUES ('".htmlentities($_POST['rock_yeni'])."', 'rock_sarki')";
  }
  else if(!empty($_POST['ergenlik_yeni'])){
    $sql = "INSERT INTO sarkilar (sarki_adi, sarki_kategori) VALUES ('".htmlentities($_POST['ergenlik_yeni'])."', 'ergenlik')";
  }
  else if(!empty($_POST['hit2020_yeni'])){
    $sql = "INSERT INTO sarkilar (sarki_adi, sarki_kategori) VALUES ('".htmlentities($_POST['hit2020_yeni'])."', 'hit2020')";
  }
  else if(!empty($_POST['huzur_yeni'])){
    $sql = "INSERT INTO sarkilar (sarki_adi, sarki_kategori) VALUES ('".htmlentities($_POST['huzur_yeni'])."', 'huzur_sarki')";
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
    $sql = "delete from sarkilar where sarki_id = ". $_GET['sil'];

    $sil = $conn->query($sql);
    if($sil){
      echo "Başarılı";
    } else {
      echo "Başarısız";
    }

    header("Refresh:0; url=sarki-duzenle.php");
  }
}

?>

<form method="POST">
<section id="features" class="sectionArea">
        <div class="featuresTop">
            <h2 class="sectionHeader">ŞARKILARI DÜZENLE</h2>
        </div>
        <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>90'lar TÜRKÇE POP LİSTESİ</h3>
                                <?php foreach ($turkce_pop as $pop){ ?>
                                  <input type="text" name="sarki_<?php echo $pop['sarki_id']; ?>" value="<?php echo $pop['sarki_adi']; ?>">
                                  <a href="sarki-duzenle.php?sil=<?php echo $pop['sarki_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="turkce_pop_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>EN POPÜLER RAP ŞARKI LİSTESİ</h3>
                                <?php foreach ($rap_sarki as $rap){ ?>
                                  <input type="text" name="sarki_<?php echo $rap['sarki_id']; ?>" value="<?php echo $rap['sarki_adi']; ?>">
                                  <a href="sarki-duzenle.php?sil=<?php echo $rap['sarki_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="rap_sarki_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>70'Lİ YILLARA DAMGA VURMUŞ ROCK ŞARKILAR</h3>
                                <?php foreach ($rock_sarki as $rock){ ?>
                                  <input type="text" name="sarki_<?php echo $rock['sarki_id']; ?>" value="<?php echo $rock['sarki_adi']; ?>">
                                  <a href="sarki-duzenle.php?sil=<?php echo $rock['sarki_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="rock_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>BİR NESLİN ERGENLİK DÖNEMİNE DAMGA VURAN ŞARKILAR</h3>
                                <?php foreach ($ergenlik as $ergen){ ?>
                                  <input type="text" name="sarki_<?php echo $ergen['sarki_id']; ?>" value="<?php echo $ergen['sarki_adi']; ?>">
                                  <a href="sarki-duzenle.php?sil=<?php echo $ergen['sarki_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="ergenlik_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>2020'DE DİNLENEN HİT ŞARKILAR</h3>
                                <?php foreach ($hit2020 as $hit){ ?>
                                  <input type="text" name="sarki_<?php echo $hit['sarki_id']; ?>" value="<?php echo $hit['sarki_adi']; ?>">
                                  <a href="sarki-duzenle.php?sil=<?php echo $hit['sarki_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="hit2020_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>YOĞA VE MEDİTASYONUNUZA HUZUR KATACAK ŞARKILAR</h3>
                                <?php foreach ($huzur_sarki as $huzur){ ?>
                                  <input type="text" name="sarki_<?php echo $huzur['sarki_id']; ?>" value="<?php echo $huzur['sarki_adi']; ?>">
                                  <a href="sarki-duzenle.php?sil=<?php echo $huzur['sarki_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="huzur_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</section>
</form>

<?php
include 'footer.php';
