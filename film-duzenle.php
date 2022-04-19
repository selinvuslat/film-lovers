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
}

if($_POST){
  $sql = 0;

  if(!empty($_POST['turk_yeni'])){
    $sql = "INSERT INTO filmler (film_adi, film_kategori) VALUES ('".htmlentities($_POST['turk_yeni'])."', 'turk_filmleri')";
  }
  else if(!empty($_POST['basyapit_yeni'])){
    $sql = "INSERT INTO filmler (film_adi, film_kategori) VALUES ('".htmlentities($_POST['basyapit_yeni'])."', 'basyapit_film')";
  }
  else if(!empty($_POST['biyografi_yeni'])){
    $sql = "INSERT INTO filmler (film_adi, film_kategori) VALUES ('".htmlentities($_POST['biyografi_yeni'])."', 'biyografi_filmi')";
  }
  else if(!empty($_POST['korku_yeni'])){
    $sql = "INSERT INTO filmler (film_adi, film_kategori) VALUES ('".htmlentities($_POST['korku_yeni'])."', 'korku_filmi')";
  }
  else if(!empty($_POST['aksiyon_yeni'])){
    $sql = "INSERT INTO filmler (film_adi, film_kategori) VALUES ('".htmlentities($_POST['aksiyon_yeni'])."', 'aksiyon')";
  }
  else if(!empty($_POST['marvel_yeni'])){
    $sql = "INSERT INTO filmler (film_adi, film_kategori) VALUES ('".htmlentities($_POST['marvel_yeni'])."', 'marvel')";
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
    $sql = "delete from filmler where film_id = ". $_GET['sil'];

    $sil = $conn->query($sql);
    if($sil){
      echo "Başarılı";
    } else {
      echo "Başarısız";
    }

    header("Refresh:0; url=film-duzenle.php");
  }
}

?>

<form method="POST">
<section id="features" class="sectionArea">
        <div class="featuresTop">
            <h2 class="sectionHeader">FİLMLERİ DÜZENLE</h2>
        </div>
        <div class="featuresBody">
                <div class="container">
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>IMBD'ye GÖRE EN İYİ TÜRK FİLMLERİ</h3>
                                <?php foreach ($turk_filmleri as $turk){ ?>
                                  <input type="text" name="film_<?php echo $turk['film_id']; ?>" value="<?php echo $turk['film_adi']; ?>">
                                  <a href="film-duzenle.php?sil=<?php echo $turk['film_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="turk_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>MUTLAKA İZLENMESİ GEREKEN BAŞYAPIT FİLMLER</h3>
                                <?php foreach ($basyapit_film as $basyapit){ ?>
                                  <input type="text" name="film_<?php echo $basyapit['film_id']; ?>" value="<?php echo $basyapit['film_adi']; ?>">
                                  <a href="film-duzenle.php?sil=<?php echo $basyapit['film_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="basyapit_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>IMDB’ye GÖRE EN İYİ BİYOGRAFİ FİLMLERİ</h3>
                                <?php foreach ($biyografi_filmi as $biyografi){ ?>
                                  <input type="text" name="film_<?php echo $biyografi['film_id']; ?>" value="<?php echo $biyografi['film_adi']; ?>">
                                  <a href="film-duzenle.php?sil=<?php echo $biyografi['film_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="biyografi_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>EN İYİ KORKU FİLMLERİ</h3>
                                <?php foreach ($korku_filmi as $korku){ ?>
                                  <input type="text" name="film_<?php echo $korku['film_id']; ?>" value="<?php echo $korku['film_adi']; ?>">
                                  <a href="film-duzenle.php?sil=<?php echo $korku['film_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="korku_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                  <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>AKSİYONU TAVAN YAPTIRAN ENFES FİLMLER</h3>
                                <?php foreach ($aksiyon as $aks){ ?>
                                  <input type="text" name="film_<?php echo $aks['film_id']; ?>" value="<?php echo $aks['film_adi']; ?>">
                                  <a href="film-duzenle.php?sil=<?php echo $aks['film_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="aksiyon_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <div class="item">
                            <div class="itemText">
                                <h3>IMDB’ye GÖRE EN İYİ MARVEL FİLMLERİ</h3>
                                <?php foreach ($marvel as $marv){ ?>
                                  <input type="text" name="film_<?php echo $marv['film_id']; ?>" value="<?php echo $marv['film_adi']; ?>">
                                  <a href="film-duzenle.php?sil=<?php echo $marv['film_id']; ?>">Sil</a>
                                  <br>
                                <?php } ?>
                                <p>Yeni Ekle</p>
                                <input type="text" name="marvel_yeni" value=""> <button type="submit">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</section>
</form>

<?php
include 'footer.php';
