<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VKİ HESAPLAMA</title>
</head>
<body>
    <h2>VÜCÜT KİTLE ENDEKSİ OLUŞTURMA</h2>
    <form action="arda.php" method="post"></form>
    <label for="ad">Adınız:</label>
    <input type="text" id="ad" name="ad" required><br>

    <label for="soyad">Soyadınız:</label>
    <input type="text" id="soyad" name="soyad" required><br>

    <label for="cinsiyet">Cinsiyet:</label>
    <select id="cinsiyet" name="cinsiyet" required>
        <option value="Erkek">Erkek</option>
        <option value="Kadın">Kadın</option>
    </select><br>
    
    <tr>
        <td>Doğum Yılını Seçiniz:</td>
        <td><select name="dogum_yili">
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            </select></td>
    </tr>
    <tr><br>
        <td>Boyunuz:</td>
        <td><input type="text" name="boy"></td>
    </tr>
    <tr>
        <td>Kilonuz:</td>
        <td><input type="text" name="kilo"></td>
    </tr>
    <button type="button" onclick="hesapla()">Hesapla</button>
    

    
    
</body>
</html>