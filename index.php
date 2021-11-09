<?php
session_start();
include 'include/header.php';
include ('include/phpCode.php');

?>

<div class="limiter">
<div class="container-login100" style="ackground-image: url('images/bg-01.jpg');">
<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
   <center><span class="test">PHP Test </span>
      <span id="myImg"><img src="images/test.png" alt="" 
         height="40" width="40"></span>
   </center>
   <div class="timer">
      <center><time id="display"></time></center>
   </div>
   <form class="login100-form validate-form flex-sb flex-w" method="post" >
   <div class="p-t-31 p-b-9">
      <span class="txt1">
      Name
      </span>
   </div>
   <div class="wrap-input100 validate-input">
      <input class="input100" type="text" name="name"  id="name" ><br>
   </div>
   <div class="p-t-13 p-b-9">
      <span class="txt1">
      Email
      </span>
   </div>
   <div class="wrap-input100 validate-input">
      <input class="input100" type="text" name="email" id="email"><br>
   </div>
   <div class="p-t-13 p-b-9">
      <span class="txt1">
      Date of Birth
      </span>
   </div>
   <div class="wrap-input100 validate-input" >
      <input class="input100" type="date" name="dob" id="dob" ><br>
   </div>
   <div class="p-t-13 p-b-9">
      <span class="txt1">
      About Yourself
      </span>
   </div>
   <div class="wrap-input100 validate-input" >
      <textarea class="input10" name="yurself" id="yurself" cols="20" rows="5"></textarea>
   </div>
   <div class="p-t-13 p-b-9">
      <span class="txt1">
      <img src="capchacode.php">
      </span>
   </div>
   <div class="wrap-input100 validate-input">
      <input class="input100 overlays" type="text" name="capcha_val" id="capcha_val"><br>
   </div>
   <span style="color:red;"><?php echo $capErr;?></span>
   <div class="container-login100-form-btn m-t-17">
      <button class="login100-form-btn  " type="submit" name="submit" id="submitbutton">
      Submit
      </button>
   </div>
</div>
<script src="include/jsCode.js"></script>

</body>
</html>