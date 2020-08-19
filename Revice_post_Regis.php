<?php
require ("connect.php");
//START ตัวแปรข้อมูลส่วนตัว
$Name_LastName = $_POST["Name_LastName"];
$ID_Card = $_POST["ID_Card"];
$Date_Of_Birth = $_POST["Date_Of_Birth"];
$Sex = $_POST["Sex"];
$Address = $_POST["Address"];
$Tel = $_POST["Tel"];
$E_mail = $_POST["E_mail"];
$Facebook = $_POST["Facebook"];
$Instagram = $_POST["Instagram"];
//End ตัวแปรข้อมูลส่วนตัว

//START ตัวแปรข้อมูลการศึกษา
$FName_LName = $_POST["FName_LName"];
$Std_ID = $_POST["Std_ID"];
$End_Year = $_POST["End_Year"];
//End ตัวแปรข้อมูลการศึกษา

//START ตัวแปรข้อมูลการทำงาน
$Company_Name = $_POST["Company_Name"];
$Company_Address = $_POST["Company_Address"];
$Profession = $_POST["Profession"];
$Rank = $_POST["Rank"];
$Company_Tel = $_POST["Company_Tel"];
//End ตัวแปรข้อมูลการทำงาน

//START ตัวแปรข้อมูล Login
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Re_Password = $_POST["Re_Password"];
//End ตัวแปรข้อมูล Login

$sql = "INSERT INTO register(Name_LastName,ID_Card,Date_Of_Birth,Sex,Address,Tel,E_mail,Facebook,Instagram) 
VALUES ('$Name_LastName','$ID_Card','$Date_Of_Birth','$Sex','$Address','$Tel','$E_mail','$Facebook','$Instagram')";
$result = mysqli_query($conn, $sql);

$sql2 = "INSERT INTO data_educational(FName_LName,Std_ID,End_Year) VALUES ('$FName_LName','$Std_ID','$End_Year')";
$result2 = mysqli_query($conn, $sql2);

$id_card = $ID_Card; // ตัวแปร id_card เก็บค่าที่รับมาจากที่ User กรอกข้อมูล
$sql3 = "INSERT INTO data_work(id_card,Company_Name,Company_Address,Profession,Rank,Company_Tel) VALUES ('$id_card','$Company_Name','$Company_Address','$Profession','$Rank',$Company_Tel)";
$result3 = mysqli_query($conn, $sql3);

$STD_ID = $Std_ID;
$sql4 = "INSERT INTO login(Username,Password,Re_Password,STD_ID) VALUES ('$Username','$Password','$Re_Password','$STD_ID')";
$result4 = mysqli_query($conn, $sql4);

mysqli_close($conn);


if($result4){
	echo "<script type='text/javascript'>";
	echo "alert('Save Succesfuly');";
	echo "window.location = 'Login.php'; ";
	echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Error!!');";
		echo "</script>";
}
?>