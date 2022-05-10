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
        elseif($page=="printer_r"){include 'form/printer/printer_r.php';}
        elseif($page=="printer_s"){include 'form/printer/printer_s.php';}
        elseif($page=="cctv"){include 'form/cctv/cctv.php';}
        elseif($page=="wallrack"){include 'form/wallrack/wallrack.php';}
         ?>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class=" fa fa-chevron-up fa-2x" aria-hidden="true"></i></button>

</body>
</html>

<script>
    mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>

<?php 
    }?>