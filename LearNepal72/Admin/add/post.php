<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 11:37 AM
 */
//echo "dfghfjfh";

$con= @mysql_connect("localhost", "root", "root");
if(!$con){
    // echo "NOK";
}
else {
    //  echo "OK";
}
$selected=@mysql_select_db("aapathon",$con);
if(!$selected){
    // echo"could not select db";
}

else {
//    echo"database selected";
}

@session_start();
$a= $_SESSION['a'];
$b= $_SESSION['b'];
$c= $_SESSION['c'];
$d= $_SESSION['d'];
$d= $_SESSION['e'];

$insert=" insert into post(name,email,art_name,article) VALUES ('$a','$b','$c','$d')";
if(!mysql_query($insert,$con)){
    die("cannot connect");
}



