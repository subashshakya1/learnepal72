<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 7:55 AM
 */

include 'connection.php';
$date=date('y-m-d');
$insert=" insert into contact(name,email,address,contact,subject,message,date) VALUES ('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[contact]','$_POST[subject]','$_POST[feedback]','$date')";
if(!mysql_query($insert,$con)){
    die("cannot connect");
}
else{header('location:contact.html');}