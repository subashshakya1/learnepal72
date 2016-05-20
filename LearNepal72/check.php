<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2/5/2016
 * Time: 5:50 PM
 */
$a=$_POST[o1];
$b=$_POST[o2];
$c=$_POST[o3];
$d=$_POST[o4];
if (($a == null) && ($b == null) && ($c == null) && ($d == null)) {
    ?><script language="javascript">
        answer=confirm("select any one !!!")
        if(answer!=0)
        {
            location="Women_ques.php"
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
            location="Women_ques.php"
        }
        else
            location="index.php"
    </script> <?php


}


@session_start();

$z= $_SESSION["f"];

if(strcmp($a,$z)==0){
    $a=0;
    //echo "congratulation";
    include 'women_ques.php';
}

elseif(strcmp($b,$z)==0){
    $b=0;
    //echo "congratulation";
    include 'women_ques.php';
}

elseif(strcmp($c,$z)==0){
    $c=0;
   // echo "congratulation";
    include 'women_ques.php';
}

elseif(strcmp($d,$z)==0){
    $d=0;
    //echo "congratulation";
    include 'women_ques.php';
}
else
{?><script language="javascript">
    answer=confirm("OOPS PLAY AGAIN !!!")
    if(answer!=0)
    {
        location="Women_ques.php"
    }
    else
        location="index.php"
</script> <?php

}
