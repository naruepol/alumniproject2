<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CheckLoginPage</title>

</head>

<body>
<?php
session_start();
require ('connect.php');

$strSQL = "SELECT * FROM login WHERE Username = '".mysqli_real_escape_string($conn,$_POST['Username'])."' and Password = '".mysqli_real_escape_string($conn,$_POST['Password'])."'";
$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
    echo"<script language=\"JavaScript\">";
    echo"alert('คุณกรอก Username และ รหัสผ่านไม่ถูกต้องค่ะ !')";
    echo"</script>";
}
else
{
        $_SESSION["Username"] = $objResult["Username"];

        session_write_close();
        header('Location: Home.php');
       
}
mysqli_close($conn);
?>
<center><a href="javascript:history.go(-1)">ย้อนกลับ</a></center>
</body>
</html>