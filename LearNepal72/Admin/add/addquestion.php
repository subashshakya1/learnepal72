
<?php

    $con=mysql_connect("localhost","root","root");
    if(!$con){ die("cannot connect to database");}
    mysql_select_db("aapathon",$con);
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $right=$_POST['right'];
    $input="insert into quiz(question,option1,option2,option3,rightanswer) VALUES ('$question','$option1','$option2','$option3','$right')";
    if(!mysql_query($input,$con)){
        die("cannot insert".mysql_error());
    }
    header('location:../home.php');
    mysql_close($con);

?>