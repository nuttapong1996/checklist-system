<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- เรียกใช้งานไฟล์ header.php -->
    <?php include 'include/header.php';?>
<title>เข้าสู่ระบบ</title>
</head>
<body>
    <!-- class container เป็นคลาสใหญ่ ใช้สำหรับคุ้มหน้าเว็บทั้งหมด -->
    <div class="container">
        <!-- class row เป็นคลาสแบ่งแถวของเนื้อหาโดย mt-5 คือ Attribute ของตัวคลาสหมายถึงขอบของวัตถุห่างจากด้านบน 5 px  -->     
        <div class="row mt-5">
            <!-- class col เป็นคลาสคอลัมน์ที่ว่างเปล่า เพื่อให้เนื้อหาอยู่กึ่งกลาง -->
            <div class="col"></div>
            <!-- class col-sm-4 เป็นคลาสคอลันมน์ ที่มีการจองพื้นที่ไว้ 4 คอลัมน์ ส่วน sm หมายถึง small คือขนาดที่ใช้ได้ดีสำหรับจอมือถือ -->
            <div class="col-sm-4">
                <img src="img/logo/logo.png" width="70%" style="display:block; margin: 0 auto; margin-bottom:20px"> <!-- Logo ของเว็บไซต์ -->
                <!--class card เป็นส่วนที่ใช้จัดแสดงหน้าตาของฟอร์ม Login โดยจะมีใน Bootsrap 4 ขึ้่นไป -->
                <div class="card">
                    <!--class card-header เป็นส่วนหัวของตัว card-->
                    <div class="card-header">ระบบตรวจเช็คอุปกรณ์ทางคอมพิวเตอร์</div>
                    <!--class card-body เป็นส่วนที่คลุมเนื้อหา-->
                    <div class="card-body">
                        <h4 class="card-title mb-3">เข้าสู่ระบบ</h4>
                        <?php if(isset($_GET['error'])==1){ ?>
                            <div class="alert alert-danger" role="alert" style="font-size:10px; text-align:center;">
                              <b> Username หรือ Password ไม่ถูกต้อง</b>
                            </div><?php } ?>
                        <!-- เนื้อหาของฟอร์ม Login โดยจะใช้ Method post ในการส่งค่าไปยัง ไฟล์ login_process.php -->
                        <form action="login/login_process.php" method="post">
                            <!--class form-group เป็นคลาสสำหรับจัดกลุ่มใหญ่โดยจะคลุมคลาส input-group อีกที -->

                            <div class="form-group">                                
                                <!-- class input-group เป็นคลายสำหรับจัดกลุ่ม Component แต่ละส่วนของฟอร์ม 
                                     เช่นในตัวอย่าง จะเป็นการจัดกลุ่ม span กับ input text 
                                     โดย input-group-sm และ mb-3 คือ Attribute ของตัวคลาส 
                                     sm คือสำหรับหน้าจอขนาดเล็ก และ mb-3 คือระยะห่างขอบล่าง 3 px -->
                                <div class="input-group input-group-sm mb-3">
                                    <!-- class input-group-prepend เป็นคลาสของหัว input-text โดยจะใช้กับคลาส input-group-text  -->
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span></div>                                   
                                    <input type="text" class="form-control" name="username" id="username" value='<?php if(isset($_COOKIE['user_login'])=='true') { echo $_COOKIE['username'];}?>'>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="password" value='<?php if(isset($_COOKIE['user_login'])=='true') { echo $_COOKIE['password'];}?>'>
                                </div>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"  name="remember" id="remember" value="true" <?php if(isset($_COOKIE["user_login"])=="true") { ?> checked="true" <?php }; ?> >
                                <label for="remMe" class="form-check-label"> Remember me</label>
                            </div>

                            <div class="btn-group pull-right">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>

                        </form>                        
                    </div>
                    <b style="text-align:center; font-size:10px;" class="card-footer">แผนกสารสนเทศ บริษัท สหกลอิควิปเมนท์ จำกัด (มหาชน)</b>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>