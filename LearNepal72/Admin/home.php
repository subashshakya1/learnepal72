<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Education</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="mainPan">
  <div id="leftPan">
    <ul class="one">
      <li class="home">Home</li>
      <li><a href="home.php?id=1">add question</a></li>
      <li><a href="home.php?id=2">contact</a></li>
        <li><a href="home.php?id=3">article</a></li>
        <li><a href="home.php?id=4">sajha sawal</a></li>
    </ul>
  </div>
  <div id="rightPan">
      <?php
      if($_GET['id']==1){
      require('add/addquestionform.php');
      }
      if($_GET['id']==2){
          require('add/contact.php');
      }
      if($_GET['id']==3){
          require('add/article.php');
      }
      if($_GET['id']==4){
          require('add/addsawalform.php');
      }
    ?>
  </div>
</div>
</body>
</html>
