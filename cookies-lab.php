<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['login'] == "Mike"&& $_POST['password']="mysecretpassword")
        echo "good";
    else

        echo "bad";



}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Login: </label><input type="text" name="login" />
    <label>Password: </label><input type="password" name="password" />
</form>
</body>
</html>





