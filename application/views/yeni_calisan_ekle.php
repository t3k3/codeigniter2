<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yeni Çalışan kaydı</title>
</head>
<body>

<?php 
if ($this->input->get('islem')=="no") {
    echo "<h1 style='color: red';>Unsuccessful</h1>";
} 
?>

    <form action="<?php echo base_url('dbislem/yeni_calisan_kaydet'); ?>" method="post">
    
    <input type="text" name="isim" required placeholder="İsminiz..."><br><br>
    <input type="text" name="soyad" required placeholder="Soyadınız..."><br><br>
    <input type="text" name="yas" required placeholder="Yaşınız..."><br><br>
    <input type="text" name="gorev" required placeholder="Göreviniz..."><br><br>
    <input type="text" name="adres" required placeholder="Adres..."><br><br>
    <input type="text" name="telefon" required placeholder="Telefon..."><br><br>
    <input type="email" name="mail" required placeholder="Mail..."><br><br>
    <button type="submit">Ekle</button>
    
    </form>
</body>
</html>