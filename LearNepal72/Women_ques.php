<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LearNepal</title>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald|Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div class="header-wrap">
    <div class="header">
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html" >About Us</a></li>
                <li><a href="Quiz.html"  class="active">Start Quiz</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Report</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end of header wrapper -->
<div class="logo-sarch-wrap">
    <div class="logo-search-container">
        <div class="logo">
            <img src="images/logoweb.jpg" alt="twitter" width="352" height="141" />
        </div>
    </div>
</div>
<!-- end of header wrapper -->
<!-- end of header wrapper -->
<div class="clearing"></div>
<!-- end of panel wrapper -->
<div class="page-wrapper">
    <div class="primary-content marginTop">
        <div class="panel">
            <div class="title padBottom">
                <h1>Quiz</h1>
                <h2>Take your Quiz</h2>
            </div>
            <div class="content padBottom"> <img src="images/img.jpg" width="200" height="200" />

                <?php  @session_start(); ?>
                <form method="post"  action="check.php"><?php
include 'connection.php';
//$string=array(2);
  //  $i=array_rand($string);
   // echo $string[$i];
    //echo $i;
    $abc = @mysql_query("select * from quiz");
    while ($r = mysql_fetch_array($abc)) {
        $a = $r['Id'];
        $b = $r['question'];
        $c = $r['w1'];
        $d = $r['w2'];
        $e = $r['w3'];
        $f = $r['r'];
    }
    $j=$a;
   // echo $j;
$i=array(100);
    $i=rand(1,$j);
    //$i=1;
$abc = @mysql_query("select * from quiz WHERE Id='$i'");
while ($r = mysql_fetch_array($abc)) {
    $a = $r['Id'];
    $b = $r['question'];
    $c = $r['w1'];
    $d = $r['w2'];
    $e = $r['w3'];
    $f = $r['r'];
    $g = $r['r'];

    $i=rand(1,4);
    //echo $i;
  if($i==1){


      echo "Q"."<&nbsp;>";
        echo $b . "<br>";
                    echo "<input type='radio' value='$c' name='o1'>".$c."<br>";
                    echo "<input type='radio' value='$d' name='o2'>".$d."<br>";
                    echo "<input type='radio' value='$e' name='o3'>".$e."<br>";
                    echo "<input type='radio' value='$f' name='o4'>".$f."<br>";

                    }
                    elseif($i==2){
                    // $f = $r['w1'];
                    //$e = $r['w2'];
                    // $d = $r['w3'];
                    //$c = $r['r'];

                    //$c = $r['r'];
                    //$d = $r['w3'];
                    //$e = $r['w2'];
                    //$f = $r['w1'];
                        echo "Q"."<&nbsp;>";
                    echo $b . "<br>";
                    echo "<input type='radio' value='$f' name='o4'>".$f."<br>";
                    echo "<input type='radio' value='$e' name='o3'>".$e."<br>";
                    echo "<input type='radio' value='$d' name='o2'>".$d."<br>";
                    echo "<input type='radio' value='$c' name='o1'>".$c."<br>";


                    }
                    elseif($i==3){
                    // $d = $r['w1'];
                    //$f = $r['w2'];
                    //$c = $r['w3'];
                    //$e = $r['r'];

                    //        $c = $r['w3'];
                    //      $d = $r['w1'];
                    //    $e = $r['r'];
                    //  $f = $r['w2'];
                        echo "Q"."<&nbsp;>";
                    echo $b . "<br>";
                    echo "<input type='radio' value='$d' name='o2'>".$d."<br>";
                    echo "<input type='radio' value='$f' name='o4'>".$f."<br>";
                    echo "<input type='radio' value='$c' name='o1'>".$c."<br>";
                    echo "<input type='radio' value='$e' name='o3'>".$e."<br>";
                    //echo "<input type='radio' value='$d' name='o2'>".$d."<br>";

                    //echo "<input type='radio' value='$f' name='o4'>".$f;

                    }
                    elseif($i==4){
                    //$e = $r['w1'];
                    //    $c = $r['w2'];
                    //      $f = $r['w3'];
                    //        $d = $r['r'];

                    //        $c = $r['w2'];
                    //      $d = $r['r'];
                    //    $e = $r['w1'];
                    //  $f = $r['w3'];

                        echo "Q"."<&nbsp;>";
                    echo $b . "<br>";
                    echo "<input type='radio' value='$e' name='o3'>".$e."<br>";
                    echo "<input type='radio' value='$c' name='o1'>".$c."<br>";
                    echo "<input type='radio' value='$f' name='o4'>".$f."<br>";
                    echo "<input type='radio' value='$d' name='o2'>".$d."<br>";



                    }


                    $_SESSION["f"]=$g;
                    echo"<br><input type='submit' value='submit'>";
                    break;
                    }?>

                </form>


                <br/><br/>
            </div>
            <div class="clearing"></div>
        </div>
    </div>
    <!-- end of Primary content -->
    <!-- end of Sidebar -->
</div>
<!-- end of page wrapper -->
<div class="clearing"></div>
<div class="footer-wrapper marginTop">
    <div class="footer"> Copyright (c) websitename. All rights reserved. Designed by: <a href="http://alltemplateneeds.com">www.alltemplateneeds.com</a> Images From: www.photorack.net </div>
</div>
</body>
</html>
