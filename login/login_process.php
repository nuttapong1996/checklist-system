<?php 
    include '../include/DbConnect.php';
    $mysqli = dbConnect();
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
    $result = $mysqli->query($sql);

    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_code'] = $row['user_code'];
            $_SESSION['password'] = md5(md5(md5($row['password']))); 
            
            if(isset($_POST['remember'])){
                if($_POST['remember'] == 'true'){              
                setcookie('username', $row['username'],time()+10*365*24*60*60,"/" );
                setcookie('password', $row['password'],time()+10*365*24*60*60,"/" ); 
                setcookie('user_login','true',time()+10*365*24*60*60,"/" );
                }
            }else{
                if(isset($_COOKIE['username'])){
                    setcookie('username',"");
                }
                if(isset($_COOKIE['password'])){
                    setcookie('password',"");
                }
            }
        }
        header("location: ../home/home.php");
    }else{
        header ("location: ../index.php?page=login&error=1");
    }

   

?>