

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- เรียกใช้รูปแบบ CSS Sidebar -->
    <link rel="stylesheet" href="css/top.css">
</head>
<body>
<!-- Nav bar Desktop -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="img/logo/icon.png" width="30" height="27"> <label for="">ระบบ Checklist</label></a>
        <button class="navbar-toggler" id="closeBtn" type="button" data-bs-toggle="collapse" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" id="home_d" aria-current="page" href="?page=home">หน้าหลัก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">แบบฟอร์ม Checklist</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?page=wifi"><i class="fa fa-wifi"></i> Wifi </a> </li>
                        <li><a class="dropdown-item" href="?page=printer_r">Printer RICOH</a></li>
                        <li><a class="dropdown-item" href="?page=printer_s">Printer Sticker</a></li>
                        <li><a class="dropdown-item" href="?page=cctv">CCTV</a></li>
                        <li><a class="dropdown-item" href="?page=wallrack">Wall Rack</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ประวัติ Checklist</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?page=report_wifi"><i class="fa fa-wifi"></i> Wifi</a></li>
                        <li><a class="dropdown-item" href="#">Printer RICOH</a></li>
                        <li><a class="dropdown-item" href="#">Printer Sticker</a></li>
                        <li><a class="dropdown-item" href="#">CCTV</a></li>
                        <li><a class="dropdown-item" href="#">Wall Rack</a></li>
                    </ul>
                </li>
                <div class="user_detail_desktop">
                    <li class="nav-item dropdown" id="user_detail_desktop">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            สวัสดี คุณ <?php echo$_SESSION['f_name'] , "  ", $_SESSION['l_name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">แก้ไขข้อมูลส่วนตัว</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="login/logout.php" id="logout">ออกจากระบบ</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    </nav>
<!-- End Nav bar Desktop -->

<!-- Side Navbar for Mobile -->
    <div id="Sidebar" class="sidebar">
            <button class="dropdown-btn" id="user_detail"> 
                <h6 >สวัสดี ,</h6> <h5> คุณ<?php echo $_SESSION['f_name'] ,"  ",$_SESSION['l_name'] ?> <i class="fa fa-caret-down"></i></h5>                
            </button>
            <div class="dropdown-container">
                <a href="#">แก้ไขข้อมูลส่วนตัว</a>
            </div>           
            <a href="?page=home" id="home_a">หน้าหลัก</a>
            <button class="dropdown-btn">
                แบบฟอร์ม Checklist
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="?page=wifi"><i class="fa fa-wifi"></i> Wifi</a>
                <a href="?page=printer_r">Printer RICOH</a>
                <a href="?page=printer_s">Printer Sticker</a>
                <a href="page=cctv">CCTV</a>
                <a href="?page=wallrack">Wall Rack</a>
            </div>
            <button class="dropdown-btn">
                ประวัติ Checklist
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="?page=history_wifi"><i class="fa fa-wifi"></i> Wifi</a>
                <a href="#">Printer RICOH</a>
                <a href="">Printer Sticker</a>
                <a href="#">CCTV</a>
                <a href="">Wall Rack</a>
            </div>
            <a href="login/logout.php" id="logout">ออกจากระบบ</a>
    </div>
<!-- End Side Navbar -->

</body>
</html>

<!-- Script for Mobile -->
<script>
function openNav() {
    var sb = document.getElementById("Sidebar");
    var cls_btn = document.getElementById("closeBtn");

    if(sb.style.width=="250px"){
        sb.style.width="0px";
        cls_btn.style.backgroundColor="orange";        
    }else {
        sb.style.width="250px";
        cls_btn.style.backgroundColor="red";
    }
}

//โค๊ด Side bar Dropdown 
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
    });
    }
</script>