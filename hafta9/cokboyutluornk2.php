<?php
$kutuphane=[
    [
    "Kitabın Adı:"=>"Nutuk",
    "Kitabın Yazarı"=>"MUSTAFA KEMAL ATATÜRK",
    "Yayınevi"=>"Yapı Kredi Yayınları"
],
[
    "Kitabın Adı:"=>"Küçük Prens",
    "Kitabın Yazarı"=>"Antonie de Saint-Exupery",
    "Yayınevi"=>"Can Çocuk Yayınları"
 ]
];
foreach($kutuphane as $kitap)
{
    foreach($kitap as $anahtar=>$deger)
    {
        echo $anahtar." - ".$deger."<br>";
    }
}
?>