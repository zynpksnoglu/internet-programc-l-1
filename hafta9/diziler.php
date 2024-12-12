<?php

/*$bilgiler=array(
    "eğitim bilgileri: ",
        "Lisans:"=>"Önlisans",
        "Deneyim: ",
        "Öğrenci"=>"Gelişim Üni",
        "Programlama dilleri: ",
        "PHP","HTML 5","CSS","Python","JS",
);
echo "<pre>";
print_r($bilgiler);
echo "</pre>";

echo $bilgiler["Lisans:"];*/

//dizideki elemanları saymak için count() kullanılır

$gunler=array("pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");
echo"Haftanın günleri"."<br>";
for($i=0;$i<count($gunler);$i++)
{
    echo $gunler[$i]."<br>";
}


?>