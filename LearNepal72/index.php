<?php include 'connection.php'; ?>
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
        <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.html">E-Book</a></li>
        <li><a href="Quiz.html">Start Quiz</a></li>
        <li><a href="articles.html">Articles</a></li>
        <li><a href="contact.html">Report</a></li>
      </ul>
    </div>
    <div class="social-media">
      <ul>
        <li><a href="#"><img src="images/aim.gif" alt="aim" /></a></li>
        <li><a href="#"><img src="images/facebook.gif" alt="facebook" /></a></li>
        <li><a href="#"><img src="images/linkedin.gif" alt="linkedin" /></a></li>
        <li><a href="#"><img src="images/twitter.gif" alt="twitter" /></a></li>
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
    <!--<div class="search">
      <div class="search-input">
        <input type="text"  class="search-text-field" value="Search Here ..." />
      </div>
      <div class="search-button"><a href="#"><img src="images/serach-icon.gif" alt="search" /></a></div>
    </div>-->
  </div>
</div>
<!-- end of header wrapper -->
<div class="banner-wrap marginBottom">
  <div class="banner-left"><img src="images/left-shadow.gif" /></div>
  <div class="banner">
    <div class="banner-image">
      <div class="banner-data">
        <div class="caption1">
          <h1>Learn Human Rights of New Constitution</h1>
        </div>
        <div class="caption2">
          <h2>Forum for Recommendations & Complaints</h2>
        </div>
        <div class="caption3">Play Quiz and learn more</div>
      </div>
    </div>
  </div>
  <div class="banner-right"><img src="images/right-shadow.gif" /></div>
</div>
<!-- end of header wrapper -->
<div class="clearing"></div>
<div class="panel-wrapper">
  <div class="panel marRight30">
    <div class="title"> <img src="images/arrow.gif" />
      <h1> <a href="#">Articles</a></h1>
    </div>
    <div class="content">
        <?php

        $abc = @mysql_query("select art_name,id from post ORDER BY id DESC ");
        for($v=1;$v<=4;$v++){
        while ($r = mysql_fetch_array($abc)) {

        $d = $r['art_name'];
        $a = $r['id'];?><b><br><?php
            ?><a href="index.php?id=<?php echo $a; ?>" ><?php echo $d;?></a></b><br><br><?php
        break;
        }
        }?>
        <p><?php/** require('view.php')**/;?></p>
    </div>
  </div>
  <div class="panel">
    <div class="title"> <img src="images/arrow.gif" width="28" height="26" />
      <h1>Read Here</h1>
    </div>
    <div class="content">
        <?php
        $id=$_GET['id'];
        //echo $id;
        $abc = @mysql_query("select article from post WHERE id='$id'");
        while ($r = mysql_fetch_array($abc)) {
        $a = $r['article'];
        //$b = $r['email'];
echo $a;
            echo" <form method='post' action='index.php'>
            <input type='text' name='comment' placeholder='comment'> &nbsp; <input type='submit' value='comment'/>
        </form> <br>";
        include 'connection.php';
        $abc = @mysql_query("select * from comment");
        while ($r = mysql_fetch_array($abc)) {
            $a = $r['comment'];
            $b = $r['date'];
            echo $b."&nbsp;".$a."<br>";
        }

        }


        ?>

    </div>
  </div>
  <div class="panel marRight30">
    <div class="title"> <img src="images/arrow.gif" />
      <h1><a href="#">Question of the Week</a></h1>
    </div>
    <div class="content">
      <p><form action="saja.php" method="post"> <?php
          $abc = @mysql_query("select * from sawal");
          while ($r = mysql_fetch_array($abc)) {
              $a = $r['sn'];
              $b = $r['option3'];
              $c = $r['option4'];
              $d = $r['question'];
              $e = $r['option1'];
              $f = $r['option2'];
          }
          echo $d."<br>" ;
          echo"<input type='radio' value='1' name='a'> &nbsp; $e<br>";
          echo"<input type='radio'value='1'name='b'> &nbsp; $b<br>";
          echo"<input type='radio'value='1'name='c'> &nbsp; $c<br>";
          echo"<input type='radio'value='1'name='d'> &nbsp; $f<br>";
          echo"<input type='submit' value='Submit'> &nbsp; <br>";
          ?></form>

        </p>
    </div>
  </div>
  <div class="panel">
    <div class="title"> <img src="images/arrow.gif" />
      <h1>Result</h1>
    </div>
    <div class="content">
      <p><h4><?php
          include 'connection.php';
          $abc = @mysql_query("select * from sawal");
          while ($r = mysql_fetch_array($abc)) {
          $h = $r['sn'];
              $a=$r['option1'];
          $e = $r['w1'];
              $b=$r['option3'];
          $f = $r['w2'];
              $c=$r['option2'];
          $g = $r['w3'];
              $d=$r['option4'];
          $i = $r['w4'];
              $j = $r['question'];

          }
          $total=$e+$f+$g+$i;
          $p1=($e/$total)*100;
          $p2=($f/$total)*100;
          $p3=($g/$total)*100;
          $p4=($i/$total)*100;
          echo $j."<br>";
          echo "*".$a."&nbsp;"; echo $p1."%"."<br>";
          echo "*".$b."&nbsp;"; echo $p2."%"."<br>";
          echo "*".$c."&nbsp;"; echo $p3."%"."<br>";
          echo "*".$d."&nbsp;"; echo $p4."%"
          ."<br>";

          ?>

        </h4></p>
    </div>
  </div>
</div>
<!-- end of panel wrapper -->
<div class="clearing"></div>
<div class="footer-wrapper marginTop">
  <div class="footer"> Copyright (c) websitename. All rights reserved. Designed by: <a href="http://alltemplateneeds.com">www.alltemplateneeds.com</a> Images From: www.photorack.net </div>
</div>
</body>
</html>
