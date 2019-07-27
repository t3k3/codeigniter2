<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Çalışan Düzenle</title>
</head>
<body>

<?php if ($this->input->get("duzenle") == "no") {
    echo "<h1 style='color: red';>Başarısız</h1>";
} ?>

<form action="<?php echo base_url('dbislem/calisan_duzenle_kaydet'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $guncellenecek_calisan->id; ?>">
    <label for="isim">İsim :</label>
    <input type="text" name="isim" required value=<?php echo $guncellenecek_calisan->isim ?>><br><br>
    <label for="isim">Soyad :</label>
    <input type="text" name="soyad" required value=<?php echo $guncellenecek_calisan->soyad ?>><br><br>
    <label for="isim">Yaş :</label>
    <input type="text" name="yas" required value=<?php echo $guncellenecek_calisan->yas ?>><br><br>
    <label for="isim">Görev :</label>
    <input type="text" name="gorev" required value=<?php echo $guncellenecek_calisan->gorev ?>><br><br>
    <label for="isim">Adres :</label>
    <input type="text" name="adres" required value=<?php echo $guncellenecek_calisan->adres ?>><br><br>
    <label for="isim">Telefon :</label>
    <input type="text" name="telefon" required value=<?php echo $guncellenecek_calisan->telefon ?>><br><br>
    <label for="isim">Mail :</label>
    <input type="email" name="mail" required value=<?php echo $guncellenecek_calisan->mail ?>><br><br>
    <button type="submit">Düzenle</button>
    
    </form>
</body>
</html>