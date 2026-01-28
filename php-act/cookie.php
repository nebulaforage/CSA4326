<form method="post">
username: <input type="text" name="username"><br>
password: <input type="password" name="password"><br>
<input type="submit" name="submit" value="Login">
</form>

<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

setcookie("username", $username, time() + 7200, "/");
echo "Cookie is set" ."<br>";
}

echo "welcome " . $_COOKIE['username'];
?>