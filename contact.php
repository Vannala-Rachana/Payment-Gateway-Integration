<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PAYMENT GATEWAY</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
</head>
<body style=" background-image:url(https://media.giphy.com/media/MCAFTO4btHOaiNRO1k/giphy.gif);background-repeat:no-repeat; background-size: 2000px  800px;">
    <form action="" method="POST">
        <input class="submit" type="submit" name="home" value="HOME">
         <input class="submit1" type="submit" name="contact" value="CONTACT">
         <?php 
         if(isset($_POST['home'])){
           header("LOCATION: index.php");
         }
         else{
           ?>
    <div class="co">
    <div id="screen_0" class="screen visible">
    <h2>Contact Us</h2>
    <h3><center>_You Can Contact Us for Further Details !__</center></h3>
    <p>Address: Hanmakonda,Telangana
      <br>
      Phone No: 9123456789
      <br>
      Email ID: vrach@gmail.com
      <br>
    </p>
    <div class="image" style="background-image:url(https://tse4.mm.bing.net/th?id=OIP.5xMeVyv-HrwlhD4b4gXMUgHaEK&pid=Api&P=0&w=296&h=167);background-size:500px 200px; background-repeat:no-repeat;opacity:1;"></div>
  </div>
</div>
</div>
<?php
   }
   ?>
</body>
</html>