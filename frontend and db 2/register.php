<!-- server.php links register.php to xamp db -->
<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <h1 style="text-align:center" > Welcome to Online-Course ware!</h1>
    <p style="text-align:center">Register and start learning</p>
  <body>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php')?>
  	<div class="input-group">
  	  <label>Firstname</label>
      <!--identifying username in php  -->
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
    <div class="input-group">
      <label>Lastname</label>
      <input type="text" name="lastname" value="<?php echo $lastname; ?>">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Phonenumber</label>
      <input type="number" name="phonenumber" value="<?php echo $phonenumber; ?>">
    </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
      <!-- clicking button will go to server.php  -->
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>