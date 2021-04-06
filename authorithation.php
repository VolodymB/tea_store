<?php
require_once 'model/User.php';

if(isset($_POST['send'])){
    $user=new User();
    if($user->user($_POST['email'],$_POST['login'],$_POST['password'])){
        var_dump($user);
        die;
        header("Location:index.php");
    }else{
        echo "введіть правильні дані";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorithaion form</title>
</head>
<body>
<p><h1>Добрий день</h1></p>
    <form action="" method='POST'>
    <input type="text" name='email' placeholder='email'><br>
    <input type="text" name='login' placeholder='login'><br>
    <input type="text" name='password' placeholder='password'><br>
    <input type="submit" name='send'><br>
    </form>
</body>
</html>

