<?php 
    if(!isset($_SESSION['user_code'])){
        header ("location: ../index.php");
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include 'include/header.php' ;     
    ?>
    
</head>
<body>
    <?php include 'template/top.php'; ?>
    <div class="container">
        <?php 
        $page = $_GET['page'];
        if($page == 'home'){echo "<title>หน้าแรก</title>";}
        else if($page=="wifi"){include 'form/wifi/wifi.php';}
         ?>
    </div>

</body>
</html>

<?php 
    }?>