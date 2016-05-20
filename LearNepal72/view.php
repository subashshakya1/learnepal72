<?php
include 'connection.php';
$abc = @mysql_query("select art_name from post ORDER BY id DESC ");
for($v=1;$v<=4;$v++){
    while ($r = mysql_fetch_array($abc)) {

        $d = $r['art_name'];
        $a = $r['coin'];?><b><br><?php
       ?><a href="a.php?id=<?php $r['id']; ?>" ><?php echo $d;?></a></b><br><br><?php
        break;
    }
}
