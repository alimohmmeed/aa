<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>الدخول بحساب موجود</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>الايميل</label>
     	<input type="text" name="uname" placeholder=""><br>

     	<label>الرمز</label>
     	<input type="password" name="password" placeholder=""><br>

     	<button type="submit">انهاء</button>
          <a href="signup.php" class="ca">انشاء حساب</a>
     </form>
</body>
</html>