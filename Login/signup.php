<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>سجل الدخول لكي تستطيع التسوق بسلاسه</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>الاسم</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="الاسم"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder=""><br>
          <?php }?>

          <label>الايميل</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder=""
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="الايميل" 
                      name="uname" 
                      placeholder=""><br>
          <?php }?>


     	<label>الرمز</label>
     	<input type="password" 
                 name="password" 
                 placeholder=""><br>

          <label>اعد كتابه الرمز</label>
          <input type="password" 
                 name="re_password" 
                 placeholder=""><br>

     	<button type="submit">انهاء</button>
          <a href="index.php" class="ca">اتملك حساب مسبقا؟</a>
     </form>
</body>
</html>