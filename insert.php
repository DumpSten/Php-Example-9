<?php require 'header.php'; ?>
<?php 

if ($_POST) {
    $baslik = $_POST["baslik"] ?? null;
    $icerik = isset($_POST["icerik"]) ? $_POST["icerik"]:null;
    $onay = isset($_POST["onay"]) ? $_POST["onay"]: 0 ;

    if (!$baslik) {
        echo "Başlık Ekleyin";
    }elseif (!$icerik) {
        echo "İçerik Ekleyn";
    }else {
        $sorgu = $db->prepare( 'INSERT INTO lessons SET
        baslik = ?,
        icerik = ?,
        onay = ?');
        $ekle = $sorgu->execute([
            $baslik,$icerik,$onay]);
            
        if ($ekle) {
            header('Location:index.php');
        }else {
            $error = $sorgu->errorInfo();
            echo 'Mysql Hatası:'. $error[2];
        }   
    }
}
    
?>
<form action="" method="post">
    Başlık:<br>
    <input type="text" name='baslik'><br> <br>
    İçerik:<br>
    <textarea name="icerik" cols="30"
        rows="10"></textarea><br> <br>
    <select name="onay">
        <option value="1">Onaylı</option>
        <option value="0">Onaylı Değil</option>
    </select>
    <button type="submit">Gönder</button>
</form>