<?php 
session_start();
include('../../include/DbConnect.php');
$mysqli = dbConnect();

$Wifi_name=$_POST['Wifi_name'];
$check_date= date_create($_POST['check_date']) ;
$check_time=date_create($_POST['check_time']);
$re_time=date_create($_POST['re_time']);
$up_time=$_POST['uptime'];
$check_ping=$_POST['check_ping'];
$led_lan=$_POST['lan_led'];
$led_24g=$_POST['24g_led'];
$led_5g=$_POST['5g_led'];
$led_power=$_POST['power_led'];
$lan_wire=$_POST['lan_wire'];
$wifi_dust=$_POST['dust'];
$mc_status = $_POST['mc_status'];
$remark= $_POST['remark'];
$user_id = $_SESSION['user_id'];

//Convert DateTime to String
$c_date = $check_date ->format('d-m-Y');
$c_time = $check_time->format('H:i:s');
$r_time = $re_time->format('H:i:s');

$strSql= "INSERT INTO tbl_checklist_wifi(wifi_index,check_date,check_time,re_time,up_time,check_ping,led_lan,led_24g,led_5g,led_power,lan_wire,wifi_dust,mc_status,remark,user_id) 
VALUES('$Wifi_name','$c_date','$c_time','$r_time','$up_time','$check_ping','$led_lan','$led_24g','$led_5g','$led_power','$lan_wire','$wifi_dust','$mc_status','$remark','$user_id');";

$result =$mysqli->query($strSql);


if($result){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='../../index.php?page=home';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    echo "<script>history.back(-1);</script>";
}

$mysqli->close();

/* echo "ชื่อ Wifi : ".$Wifi_name."<br>";
echo "วันที่เช็ค : ".date_format($check_date,"d-m-Y")."<br>";
echo "เวลาเช็ค : ". date_format($check_time,"H:i:s") ."<br>";
echo "เวลาที่ Reset : ".date_format($re_time,"H:i:s")."<br>";
echo "ใช้งานมาเป็นเวลา : ".$uptime."<br>";
echo "สถานะการ Ping : ".$check_ping."<br>";
echo "LED: LAN : ".$lan_led."<br>";
echo "LED: 2.4G : ".$s24g_led."<br>";
echo "LED: 5G : ".$s5g_led."<br>";
echo "LED: Power ".$power_led."<br>";
echo "สภาพสาย LAN: ".$lan_wire."<br>";
echo "ฝุ่น : ".$dust."<br>";
echo "สถานะของอุปกรณ์  : ".$mc_status."<br>";
echo "หมายเหตุ : ".$remark."<br>"; */




?>