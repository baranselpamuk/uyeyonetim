<?php
$host = "localhost";
$mysqladi = "root";
$mysqlsifre ="";
$db = "baranselx";
@mysql_connect ("$host", "$mysqladi", "$mysqlsifre") or die ("MySql Baglantisinda Hata");
@mysql_select_db ("$db") or die ("Üye Veritabanina Baglanilamadi");
?>