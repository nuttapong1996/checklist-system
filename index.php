<?php 
    session_start();
  if (!isset($_GET["page"]))
{
    $_GET["page"] = '';
}
    switch ($_GET['page']) {
        default:
            if(!isset($_SESSION['user_code'])){
                include 'login/index.php';
            }else{
                include 'home/home.php';
            }
            break;
    } 
?>