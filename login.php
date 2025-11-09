<!DOCTYPE html>
<html>
<body>
<h3>Login</h3>
<form method="post">
<input name="username" placeholder="Username or Email"><br>
<input type="password" name="password" placeholder="Password"><br>
<button>Login</button>
</form>

<?php
session_start();
if($_POST){
 $c=new mysqli("localhost","root","","atlab1");
 $u=$_POST['username']; $p=$_POST['password'];
 $r=$c->query("SELECT * FROM users WHERE username='$u' OR email='$u'");
 if($r->num_rows){
   $user=$r->fetch_assoc();
   if(password_verify($p,$user['password'])){
     $_SESSION['u']=$user['username'];
     header("Location: dashboard.php");
     exit();
   } else echo "❌ Wrong password!";
 } else echo "❌ User not found!";
}
?>
</body>
</html>
