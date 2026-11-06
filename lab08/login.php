
<?php
include 'header.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content=" Truong Viet Dung">
  <title>Login</title>
</head>
<body>
  <form action="process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    

    <input type="hidden" name="token" value="DSWH03900">
    <input type="submit" value="Login">
  </form>

</body>
</html>
<?php
include 'footer.inc';
?>