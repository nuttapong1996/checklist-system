<?php 
session_start();

$check_date= date_create($_POST['check_date']) ;
$check_time=date_create($_POST['check_time']);
$Wifi_name=$_POST['Wifi_name'];
$check_ping=$_POST['check_ping'];
$lan_led=$_POST['lan_led'];
$s24g_led=$_POST['24g_led'];
$s5g_led=$_POST['5g_led'];
$power_led=$_POST['power_led'];
$re_time=date_create($_POST['re_time']);
$lan_wire=$_POST['lan_wire'];
$dust=$_POST['dust'];



echo "วันที่เช็ค : ".date_format($check_date,"d/m/Y")."<br>";
echo "เวลาเช็ค : ". date_format($check_time,"H:i") ."<br>";
echo "เวลาที่ Reset : ".date_format($re_time,"H:i")."<br>";
echo "ชื่อ Wifi : ".$Wifi_name."<br>";
echo "สถานะการ Ping : ".$check_ping."<br>";
echo "สถานะการสายไฟ LAN : ".$lan_led."<br>";
echo "สถานะการเชื่อมต่อ 2.4G : ".$s24g_led."<br>";
echo "สถานะการเชื่อมต่อ 5G : ".$s5g_led."<br>";
echo "สถานะการเชื่อมต่อไฟ : ".$power_led."<br>";
echo "สภาพสาย LAN: ".$lan_wire."<br>";
echo "ฝุ่น : ".$dust."<br>";




?>