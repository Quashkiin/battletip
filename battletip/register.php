<?php
include_once 'header.php';
?>
    
<!-- HTML Gerüst für Sign-Up und den Button dafür-->
<!-- register_test.php stellt die funktionalität dafür bereit-->

<!--MAIN-SCREEN-->
    <div class="item3">
          <h1>Sign Up</h1>
          <form class="signup-form" action="register_test.php" method="POST">
              <input type="text" name="first" placeholder="Firstname">
              <input type="text" name="last" placeholder="Lastname">
              <input type="text" name="username" placeholder="Username">
              <input type="password" name="pwd" placeholder="Password">
              <button type="submit" name="submit">Sign-Up</button>
          </form>
    </div>
 

<?php 
include_once 'footer.php';
?>
    