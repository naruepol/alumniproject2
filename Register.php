<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br>
	<center><h1>ข้อมูลส่วนตัว</h1></center>
<center><form method="post" action="Revice_post_Regis.php">
    <table width="50%" border="0">
  <tr>
    <td>ชื่อ-นามสกุล</td>
    <td><input name="Name_LastName" type="text" maxlength="100"/></td>
  </tr>
  <tr>
    <td>เลขบัตรประจำตัวประชาชน</td>
    <td><input name="ID_Card" type="text" id="ID_Card" size="30" maxlength="13"/></td>
  </tr>
  <tr>
    <td>วัน/เดือน/ปีเกิด</td>
    <td><label for="Date_Of_Birth"></label><input type="date" name="Date_Of_Birth"  /></td>
  </tr>
  <tr>
    <td>เพศ</td>
    <td><input type="radio" name="Sex" value="ชาย" />
    <label for="radio">ชาย</label>
    <input type="radio" name="Sex" value="หญิง" />
    <label for="radio2">หญิง</label></td>
  </tr>
  <tr>
    <td>ที่อยู่</td>
    <td><label for=""></label><label for="textarea2"></label><textarea name="Address"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์</td>
    <td><label for="E-mail"></label>
    <input name="Tel" type="text" maxlength="10" /></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><label for="textarea"></label>
    <label for="E_mail"></label>
    <input name="E_mail" type="text" id="E-mail" size="40" maxlength="50" /></td>
  </tr>
  <tr>
    <td>Facebook</td>
    <td><label for="textfield"></label>
    <input name="Facebook" type="text" maxlength="50"  /></td>
  </tr>
  <tr>
    <td>Instagram</td>
    <td><input name="Instagram" type="text" maxlength="50" id="Instagram"  /></td>
  </tr>
</table>
<br><br>
<center><h1>ข้อมูลการศึกษา</h1></center>
<center>
    <table width="50%" border="0">
    <tr>
    <td>ชื่อ - นามสกุลขณะศึกษาอยู่</td>
    <td><input name="FName_LName" type="text" maxlength="100"/></td>
  </tr>
  <tr>
    <td>รหัสนักศึกษา</td>
    <td><input name="Std_ID" type="text" id="ID_Card" size="30" maxlength="9"/></td>
  </tr>
  <tr>
    <td>ปีที่จบการศึกษา</td>
    <td><label for="End_Year"></label><input type="date" name="End_Year"  /></td>
  </tr>
    </table>
</center>
<br><br>
<center><h1>ข้อมูลการทำงาน</h1></center>
<center>
    <table width="50%" border="0">
    <tr>
    <td>ชื่อบริษัท</td>
    <td><input name="Company_Name" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ที่อยู่บริษัท</td>
    <td><label for=""></label><label for="textarea2"></label><textarea name="Company_Address"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>อาชีพ</td>
    <td><input name="Profession" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ตำแหน่ง</td>
    <td><input name="Rank" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์บริษัท</td>
    <td><label for="Company_Tel"></label>
    <input name="Company_Tel" type="text" maxlength="10" /></td>
  </tr>
    </table>
</center>
<br><br>
<center><h1>สมัครสมาชิกเข้าสู่ระบบ</h1></center>
<center>
<table width="50%" border="0">
  <tr>
    <td>Username</td>
    <td><input name="Username" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>รหัสผ่าน</td>
    <td><input name="Password" type="password" maxlength="50" /></td>
  </tr>
  <tr>
    <td>ยืนยันรหัสผ่าน</td>
    <td><input name="Re_Password" type="password" maxlength="50" /></td>
  </tr>
</table>
<center><input name="submit" type="submit" value="สมัครสมาชิก" /></center>
</form></center></center>
<br>

</body>
</html>