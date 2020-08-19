<html>
<head>
<?php 
require ("connect.php"); 
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title> Profile </title>
<style>
body {
    background-color: #FFFFCC;
}
</style>
</head>
<body>
    <br>
    <br>
                    <center><h1>ข้อมูลส่วนตัว</h1></center>
                    <!-------------Start Database Profile---------------->
                    <?php
                        $strSQL = "SELECT * FROM register";
                        $objQuery = mysqli_query($conn,$strSQL);
                        while($row = mysqli_fetch_array($objQuery)) { 
                        ?>
<img src="img/projex/man_22007.png" class="rounded mx-auto d-block" alt="..."> <!-------------รูป---------------->
    <br>
    <center>
    <div class="form-group">
    <label for="Prefix">นาย &nbsp;<?php echo $row['Name_LastName'];?></label> <!-------------แสดงชื่อและนามสกุล---------------->
    </div>
    <div class="form-group">
    <label for="Sex">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพศ &nbsp;<?php echo $row['Sex'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันเดือนปีเกิด &nbsp;<?php echo $row['Date_Of_Birth'];?></label> <!-------------แสดงเพศและวันเดือนปีเกิด---------------->
    </div>
                        </center>
    <div class="form-group">
    <label for="ID_Card">&nbsp;&nbsp;&nbsp;&nbsp;เลขบัตรประชาชน &nbsp;<?php echo $row['ID_Card'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เบอร์โทรศัพท์&nbsp;<?php echo $row['Tel'];?></label> <!-------------แสดงชื่อและนามสกุล---------------->                   
    </div>
    <div class="form-group">
    <label for="Address">&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่ &nbsp;<?php echo $row['Address'];?></label> <!-------------แสดงที่อยู่---------------->
    </div>
    <div class="form-group">
    <label for="E-mail">&nbsp;&nbsp;&nbsp;&nbsp;E-mail &nbsp;<?php echo $row['E_mail'];?></label> <!-------------แสดงอีเมลล์---------------->
    </div>
    <div class="form-group">
    <label for="Facebook">&nbsp;&nbsp;&nbsp;&nbsp;Facebook &nbsp;<?php echo $row['Facebook'];?></label> <!-------------แสดงที่Facebook---------------->
    </div>
    <?php } ?> <!-------------End Database Profile---------------->
    <br>
    <br>
                    <center><h1>การศึกษา</h1></center>
                     <!-------------Start Database Educational---------------->
                     <?php
                        $strSQL = "SELECT * FROM data_educational";
                        $objQuery = mysqli_query($conn,$strSQL);
                        while($row = mysqli_fetch_array($objQuery)) { 
                        ?>
    <br>
    <div class="form-group">
    <label for="FName_LName">&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ - นามสกุลขณะศึกษาอยู่ &nbsp;นาย&nbsp;<?php echo $row['FName_LName'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รหัสนักศึกษา &nbsp;<?php echo $row['Std_ID'];?></label> <!-------------แสดงชื่อและนามสกุล---------------->
    </div>
    <div class="form-group">
    <label for="End_Year">&nbsp;&nbsp;&nbsp;&nbsp;ปีที่จบ &nbsp;<?php echo $row['End_Year'];?></label> <!-------------แสดงรหัสนักศึกษา---------------->
    </div>
    <?php } ?>  <!-------------End Database Educational---------------->
    <br>
    <br>
                    <center><h1>ข้อมูลการทำงาน</h1></center>
                     <!-------------Start Database Data_Work---------------->
                     <?php
                        $strSQL = "SELECT * FROM data_work";
                        $objQuery = mysqli_query($conn,$strSQL);
                        while($row = mysqli_fetch_array($objQuery)) { 
                        ?>
    <br>
    <div class="form-group">
    <label for="Company_Name">&nbsp;&nbsp;&nbsp;&nbsp;ชื่อบริษัท &nbsp;<?php echo $row['Company_Name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาชีพ &nbsp;<?php echo $row['Profession'];?></label> <!-------------แสดงชื่อบริษัทและอาชีพ---------------->
    </div>
    <div class="form-group">
    <label for="Company_Tel">&nbsp;&nbsp;&nbsp;&nbsp;ชื่อบริษัท &nbsp;<?php echo $row['Company_Tel'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาชีพ &nbsp;<?php echo $row['Rank'];?></label> <!-------------แสดงเบอร์โทรบริษัทและตำแหน่ง---------------->
    </div>
    <div class="form-group">
    <label for="Address">&nbsp;&nbsp;&nbsp;&nbsp;ที่อยู่บริษัท &nbsp;<?php echo $row['Company_Address'];?></label> <!-------------แสดงที่อยู่บริษัท---------------->
    </div>
    <?php } ?>  <!-------------End Database Data_Work---------------->
    <center><a href="Home.php"><button type="button" class="btn btn-primary">ย้อนกลับ</button></a></center>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</center>
</html>