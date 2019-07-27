<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Çalışanlar</title>
</head>
<body>

<?php 
if ($this->input->get('islem')=="ok") {
    echo "<h1 style='color: green';>Success</h1>";
}
if ($this->input->get('duzenle')=="ok") {
    echo "<h1 style='color: green';>Düzenlendi</h1>";
} 

if ($this->input->get('sil')=="ok") {
    echo "<h1 style='color: red';>Silindi</h1>";
} 

if ($this->input->get('sil')=="no") {
    echo "<h1 style='color: red';>Silinemedi</h1>";
} 
?>


<a href="<?php echo base_url('dbislem/yeni_calisan'); ?>">Yeni Çalışan Ekle</a>
<br><br>

<table border="1" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th>Id</th>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Yaş</th>
        <th>Görevi</th>
        <th>Adres</th>
        <th>Telefon</th>
        <th>Mail</th>
        <th>İşlemler</th>
    </tr>
    </thead>
    <?php foreach ($calisanlar as $calisan){ ?>
    <tr>
        <td><?php echo $calisan->id ?></td>
        <td><?php echo $calisan->isim ?></td>
        <td><?php echo $calisan->soyad ?></td>
        <td><?php echo $calisan->yas ?></td>
        <td><?php echo $calisan->gorev ?></td>
        <td><?php echo $calisan->adres ?></td>
        <td><?php echo $calisan->telefon ?></td>
        <td><?php echo $calisan->mail ?></td>
        <td><a href="<?php echo base_url('dbislem/calisan_duzenle'); echo '/'.$calisan->id; ?>">[ Düzenle ]</a>
        <a href="<?php echo base_url('dbislem/calisan_sil'); echo '/'.$calisan->id; ?>">[ Sil ]</a></td>

    </tr>
    <?php } ?>
</table>

</body>
</html>