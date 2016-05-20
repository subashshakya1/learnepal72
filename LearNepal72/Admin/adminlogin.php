<?php
@session_start();
$con=mysql_connect("localhost","root","root");
mysql_select_db('aapathon',$con);
$formusername=$_POST['username'];
$formpassword=md5($_POST['password']);
$valid="no";
$result1=mysql_query("select Admin_username,Admin_password from admin");
while ($row1 = mysql_fetch_array($result1))
{
    $dbusername=$row1['Admin_username'];
    $dbpassword=$row1['Admin_password'];
    if ((strcmp($formusername,$dbusername)==0) && (strcmp($formpassword,$dbpassword)== 0))
    {
        $valid="yes";
        header('location:home.php');
    }
}
if($valid=="no"){
    $_SESSION['validadmin']="not valid admin";
    header('location:index.php');
}
?>
