

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- เรียกใช้รูปแบบ CSS Sidebar -->
    <link rel="stylesheet" href="css/sidebar.css">
<!--เรียกใช้งาน Library จากไฟล์ header.php -->
    <?php include 'include/header.php'; ?>
</head>
<body>

<!-- ########################## Main Navbar  ###################-->
    <nav class="navbar navbar-dark bg-dark" id="main-nav"> 
        <div class="contain-fluid">            
            <button class="navbar-toggler ms-3" id="collapse" type="button" style="background-color: orange;" onclick="openNav()" >
                <?php  ?>
            </button>
            <img class="navbar-brand-centered" src="img/logo/icon.png" >              
        </div>           
    </nav>
<!-- #############################################################-->

<!-- ######################## Sub Navbar ######################### -->
    <nav class="navbar navbar-light bg-light" id="sub-nav"><div class="ms-3">ระบบตรวจเช็คอุปกรณ์ทางคอมพิวเตอร์</div></nav>
<!-- #############################################################-->

<!-- ####################### Side bar ############################-->
   <nav id="mySidebar" class="sidebar">
       
        <a href="#" style="pointer-events: none; cursor:default;">  <h3><?php echo $_SESSION['username']; ?> </h3></a>
        <a href="#">Menu 1</a>
        <a href="#">Menu 1</a>
        <a href="#">Menu 1</a>
        <a href="#">Menu 1</a>
        <a href="login/logout.php" class="btn-logout">ออกจากระบบ</a>
    </nav>
<!-- #############################################################-->
</body>
</html>


<script type="text/javascript">

function openNav() {
var sb = document.getElementById("mySidebar");
var mn = document.getElementById("main");
var c = document.getElementById("collapse");
var btn_text =document.getElementById("button-text");

    if(sb.style.width=="200px"){
        sb.style.width="0px";
        c.style.backgroundColor="orange";

        // mn.style.marginLeft="250px";
    }else {
        sb.style.width="200px";
        c.style.backgroundColor="red";
        // mn.style.marginLeft="0";
    }
}

</script>