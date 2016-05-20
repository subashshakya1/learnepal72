<?php
$con=mysql_connect('localhost','root','root');
if(!$con){ die("cannot connect".mysql_error()); }
mysql_select_db("learnepal",$con);
$abc=" select * from message";
while($r=mysql_fetch_array($abc)){
    $a=$r['fullname'];
    $b=$r['message'];
    echo $a;
    echo "gdgdfg";

}
