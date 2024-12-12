<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faktöriyel</title>
</head>
<body>
<form name="form" action="" method="post">
    Sayı giriniz:
    <input type="text" name="sayi">
    <input type="submit" name="gonder" value="Gonder">
</form>
    
</body>
</html>

<?php
if(isset($_POST["gonder"]))
{
    $ksayi=$_POST["sayi"];
    if($ksayi<0)
    {
        echo "Negatif sayıların faktöriyeli bulunmaz"."<br>";
    }
    else
    {
        $faktoriyel=1;
        for($i=1;$i<=$ksayi;$i++)
        {
            $faktoriyel=$faktoriyel*$i;
        }
        echo $ksayi."sayısının faktoriyeli: ".$faktoriyel;
    }
}
?>