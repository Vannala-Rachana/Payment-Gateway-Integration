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
   if(isset($_POST['contact']))
   {
     header("LOCATION: contact.php");
   }
   else{
     ?>
         <div class="co">
      <div id="screen_0" class="screen visible">
        <h2>Let's Help Together !!!</h2>
   
        <p>Due to Covid-19 pandemic , Many people lost their jobs and it's very tough time to each and everyone of us. 
             Help poor and needy by donating some Money from your side and it's our duty to make sure they get  all the essential needs. </p><br>
            <a><center>__<strong>Let's overcome this Pandemic together !</strong>___</center></a>
        <div class="b">
          <center><STRONG>Click Below: </STRONG></center><BR>
        <center><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HW0Yci7Aer0Z30" async> </script> </form></center>
       </div>
        <div class="image" style="background-image:url(http://capesamaritans.org/wp-content/themes/samaritans2016/library/images/header-donate.png);background-size:500px 200px;background-repeat:no-repeat;"></div>
      </div>
      <?php
   }
   ?>
   </div>
  </div>
</body>
</html>