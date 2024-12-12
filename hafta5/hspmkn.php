
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
    <h2> Switch ile hesap makinesi </h2>
    <form name="form" action="" method="post">
        <table>
            <tr>
                <td>1.sayıyı giriniz:</td>
                <td><input type="text" name="sayi1"></td>
</tr>
<tr>
    <td>2.sayıyı giriniz:</td>
    <td><input type="text" name="sayi2"></td>
</tr>
<tr>
    <td>İşlem tipini seçiniz:</td>
    <td><select name="secim">
        <option value="topla">Toplama</option>
        <option value="cikar">Çıkarma</option>
        <option value="carp">Çarpma</option>
        <option value="bol">Bölme</option>
</select></td>
</tr>
<tr>
    <td> <input type="sumbit" name="gönder"
    value="İşlem Yap"></td></tr>
</table>
</form>

</html>