<?php
require ("connect.php");

//START ตัวแปรข้อมูล Search
$Std_ID = $_POST["Std_ID"];
$FName_LName = $_POST["FName_LName"];
$Re_Password = $_POST["End_Year"];
//End ตัวแปรข้อมูล Search

$strSQL = "SELECT * FROM data_educational WHERE Std_ID = '".mysqli_real_escape_string($conn,$_POST['Std_ID'])."' or FName_LName = '".mysqli_real_escape_string($conn,$_POST['FName_LName'])."'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
    echo"<script language=\"JavaScript\">";
    echo"alert('ไม่พบข้อมูลที่คุณค้นหาค่ะ !')";
    echo"</script>";
}
else
{ 
            header("location:Profile_Search.php");
}
    ?>