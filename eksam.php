
<?php
//$kommentaarium="";
require('parim.php');
require('lugemine.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eksam</title>
</head>
<body>
<h1>Minu ülesanne</h1>
<p>Loo lihtsustatud enampakkumise süsteem. Kasutajad saavad teha pakkumisi. Kuva parima pakkuja nime ja summat.</p>

<p>Sisesta pakkumine</p>
<form>
    <input type="text" name="nimi" value="pakkuja">
    <input type="number" name="pakkumus" value="0">
    <input type="submit" formmethod="post" name="saada" value="saada" formaction="sisestus.php">
</form>
<h2>Parim</h2>
<p>Parim pakkuja on:</p>
<?= $parimPakkuja ?>
<p>pakkumusega:</p>
<?= $parimPakkumine ?>
<h3>Kõik osalejad aplaus kõigile osalejatele</h3>
<?= $pakkujad ?>

</body>
</html>
