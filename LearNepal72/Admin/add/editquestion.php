
<?php

$con=mysql_connect("localhost","root","root");
if(!$con){ die("cannot connect to database");}
mysql_select_db("learnepal",$con);
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$input="insert into question(question,option1,option2,option3,option4) VALUES ('$question','$option1','$option2','$option3','$option4')";
if(!mysql_query($input,$con)){
    die("cannot insert".mysql_error());
}
header('location:../admindashboard.php');
mysql_close($con);

?>