<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 7:31 AM
 */

include 'connection.php';
$date=date('y-m-d');
$insert=" insert into article(name,email,art_name,article,date) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[feedback]','$date')";
if(!mysql_query($insert,$con)){
    die("cannot connect");
}
else{header('location:articles.html');}