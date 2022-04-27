<?php
    //เรียกใช้งานไฟล์ DbProfile.php 
    include_once('DbProfile.php');

    //ฟังก์ชั่นสำหรับเชื่อมต่อฐานข้อมูล
    function dbConnect(){
        $conn = new mysqli(HOST, USER, PASSWORD, DB); //เรียกใช้ตัวแปร์ข้อมูลจากไฟล์ DbProfile.php
        $conn->set_charset('utf8'); //กำหนดภาษาตัวอักษร
        return $conn;
    }
?>