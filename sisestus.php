<?php
    mb_internal_encoding("UTF-8");
    $pakkuja=htmlspecialchars($_POST["nimi"]);
    $pakkumus=htmlspecialchars($_POST["pakkumus"]);
    $aeg=date("Y.m.d    h:i:sa");


    $sorteerimine=fopen("parimPakkumine.txt","r");
    $handle = fopen("parimPakkuja.txt", "r");


    $pkirjuta=fopen("parimPakkumine.txt","r");
    $nkirjuta= fopen("parimPakkuja.txt","r");
    $parimPakkuja = file_get_contents('parimPakkuja.txt');
    $parimPakkumine = file_get_contents('parimPakkumine.txt');


    //testiks teisendan numbriteks
    $parimnumber=intval($parimPakkumine);
    $pakutudnumber=intval($pakkumus);
    //Kui parim pakkumine on väiksem kui sisestatud siis kirjutatakse parimate pakkumiste 2 faili üle
if($parimnumber<=$pakutudnumber){

        file_put_contents("parimPakkuja.txt", $pakkuja , FILE_APPEND);
        file_put_contents("parimPakkumine.txt", $pakutudnumber , FILE_APPEND);
        fclose($pkirjuta);
        fclose($nkirjuta);
    }else{

    }
// kõik pakkumised lähevad üldfailidesse
    $oksjon = fopen("osalejad.txt", "a") or die("osalejate faili pole");
    $pakkumised=fopen("pakkumused.txt", "a") or die("pakkumuste faili pole");
    file_put_contents("osalejad.txt","\n" . $pakkuja , FILE_APPEND);
    file_put_contents("pakkumused.txt","\n" . $pakutudnumber , FILE_APPEND);

    fclose($oksjon);
    fclose($pakkumised);

    //tagasi pealehele
    header('location: eksam.php');

?>