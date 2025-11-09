<!DOCTYPE html>
<html>
<body>
<h3>Register</h3>
<form method="post">
<input name="username" placeholder="Username"><br>
<input name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>
<button>Register</button>
</form>

<?php
if($_POST){
 $c=new mysqli("localhost","root","","atlab1");
 $u=$_POST['username']; $e=$_POST['email'];
 $p=password_hash($_POST['password'],PASSWORD_DEFAULT);
 $c->query("INSERT INTO users(username,email,password) VALUES('$u','$e','$p')");
 echo "✅ Registered! <a href='login.php'>Login</a>";
}
?>
</body>
</html>
