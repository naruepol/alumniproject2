
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$ServerName = "localhost";
$DbName = "projex";
$UserName = "root";
$Password = "12345678";
$conn = mysqli_connect($ServerName,$UserName,$Password,$DbName) or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' "); 
if($conn)
{
echo ("Database Connect Successful.");	
}
else
{
echo ("Database Connect Fail.");	
}

?>

</body>
</html>