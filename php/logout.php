<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo '<h2>You have cleaned session</h2>';

?>


<style>
h2{
text-allign:center;
color: #017572;
}
</style>
<br/><br/>
Back to <a href="index.php"><button class="btn btn-lg  btn-primary">Login Page</a></button>
