<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/7/2016
 * Time: 8:06 AM
 */
include 'connection.php';
$date=date('y-m-d');
$insert="insert into comment(comment) VALUES ('$_POST[comment]','$date')";
include 'index.php';