<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/6/2016
 * Time: 11:17 AM
 */
@session_start();
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
//echo "dfdfb";
$abc = @mysql_query("select * from article");
while ($r = mysql_fetch_array($abc)) {
    $a = $r['name'];
    $b = $r['email'];
    $c = $r['art_name'];
    $d = $r['article'];
    $e = $r['date'];
    $_SESSION['a'] = $r['name'];
    $_SESSION['b'] = $r['email'];
    $_SESSION['c'] = $r['art_name'];
    $_SESSION['d'] = $r['article'];
    $_SESSION['e'] = $r['date'];


}
echo $a.$b.$c.$d.$e;?><form method="post" action="post.php"><input type="submit" value="add"/></form>
    <form method="post" action="next.php"><input type="submit" value="next"/></form><?php
//$f = $r['r'];

