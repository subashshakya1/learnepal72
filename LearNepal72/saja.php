<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 5:54 PM
 */
$a=$_POST[a];
$b=$_POST[b];
$c=$_POST[c];
$d=$_POST[d];
if (($a == null) && ($b == null) && ($c == null) && ($d == null)) {
    ?><script language="javascript">
        answer=confirm("select any one !!!")
        if(answer!=0)
        {
            location="index.php"
        }
        else
            location="index.php"
    </script> <?php

}
if($a!=null){
    if (($b == null) && ($c == null) && ($d == null)) {
        $x=1;
    }
}

if($b!=null){
    if (($a == null) && ($c == null) && ($d == null)) {
        $x=1;
    }
}

if($c!=null){
    if (($b == null) && ($a == null) && ($d == null)) {
        $x=1;
    }
}

if($d!=null){
    if (($b == null) && ($c == null) && ($a == null)) {
        $x=1;
    }
}

if($x!=1){
    ?><script language="javascript">
        answer=confirm("select any one !!!")
        if(answer!=0)
        {
            location="index.php"
        }
        else
            location="index.php"
    </script> <?php


}



include 'connection.php';
$abc = @mysql_query("select * from sawal");
while ($r = mysql_fetch_array($abc)) {
    $h = $r['sn'];
    $e = $r['w1'];
    $f = $r['w2'];
    $g = $r['w3'];
    $i = $r['w4'];
    //$e = $r['option1'];
    //$f = $r['option2'];
}
//echo $a;
//echo $b;
//echo $c;
//echo $d;
//echo $e;

$abc = @mysql_query("UPDATE sawal SET w1=$a+$e WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w2=$b+$f WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w3=$c+$g WHERE sn=$h ");
$abc = @mysql_query("UPDATE sawal SET w4=$d+$i WHERE sn=$h ");
include 'index.php';