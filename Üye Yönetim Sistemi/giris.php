<html>
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Üye Girişi</title>
</head>
 
<body>
<center>
<?php
if (!$hata =="") {
echo '<font face="verdana" size="2" color="#800000"><b>Giriş Sırasında Hata Oluştu</b><br>';
echo 'Şifre veya Kullanıcı Adı Yanlış. Tekrar Deneyin<br>';
}
?>
</center>
<center>
<form action="giris_tamamla.php" method="post">
<table border="1" cellspacing="1" style="border:1.5pt solid #0000FF;
" width="28%" id="AutoNumber1" height="2" fpstyle="6,011111100">
  <tr>
    <td width="100%" colspan="2" height="18"
style="border-bottom:1.5pt solid black; font-weight: bold; color:
white; background-color: #000000; border-left-style:none;
border-right-style:none; border-top-style:none">
    <p align="center"><b><font color="#0000FF" face="Verdana">Üye Girişi</font></b></td>
  </tr>
  <tr>
    <td width="25%" height="22" style="font-weight: bold; color:
black; border-style: none; background-color: silver">Üye
Adı</td>
    <td width="75%" height="22" style="color: navy; border-style:
none; background-color: silver">&nbsp;&nbsp; <input
type="text" name="kullaniciadi" size="20"></td>
  </tr>
  <tr>
    <td width="25%" height="22" style="font-weight: bold; color:
black; border-style: none; background-color: silver">Şifre</td>
    <td width="75%" height="22" style="color: navy; border-style:
none; background-color: silver">&nbsp;&nbsp; <input
type="password" name="sifre" size="20"></td>
  </tr>
  <tr>
    <td width="100%" colspan="2" height="1" style="font-weight:
bold; color: black; border-style: none; background-color: silver">
    <p align="center"><input type="submit" value="Gönder"></td>
  </tr>
</table>
</form>
</center>
</body>
 
</html>