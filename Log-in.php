<?php 

    session_start();
    if (strlen($_SESSION['email']) != "") {
        session_destroy();
        session_unset();
        header("Location: index.php");
    }
   
    $db = mysql_connect("localhost",'mnemo_admin','123');
    mysql_select_db("mnemo_bd", $db);

    if (isset($_POST['button'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $query = mysql_query("SELECT * from users WHERE user_email='$email'");
    $myrow = mysql_fetch_array($query);

    if ($email == $myrow['user_email'] && $email !='') {
        if (md5($password) == $myrow['user_password'] && $password !='') {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $myrow['user_name'];
            header("Location: index.php");
        }
        else{
            header("Location: Log-in.php");
        }
    }
 ?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log In</title>
    <link rel="icon" href="logo/Icon.png" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/Main.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">

    <style>body{background: url(logo/background.png);}</style>

    </head>
    <body class="text-center">
        <form class="form-signin" action="Log-in.php" method="post">
            <img class="mb-4" src="logo/MnemosyneRed.svg" alt="logo"> 
            
            <label for="inputEmail" class="sr-only">Email address</label>
            <input name="email" type="Email" id="inputEmail" class="form-control form_labels font" placeholder="Email address" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="Password" id="inputPassword" class="form-control form_labels font" placeholder="Password" required>

            <div class="checkbox mb-3" style="color: #fff !important;">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <!-- <button class="btn btn-lg btn-primary btn-block" style="margin-right: 1em; margin-bottom: 1em; background: #FF473A;  border-color: #FF473A; font-size: 1em; font-family: 'Montserrat', sans-serif; font-weight: 500; white-space: pre" type="submit">
                <a href="index.php" style="color: #fff !important; text-decoration: none; margin-top: 2.5em !important">Log In</a>
            </button> -->

            <input type="submit" name="button" value="Log in" class="btn btn-lg btn-primary btn-block" style="margin-right: 1em; margin-bottom: 1em; background: #FF473A;  border-color: #FF473A; font-size: 1em; font-family: 'Montserrat', sans-serif; font-weight: 500; white-space: pre; color: #fff !important; text-decoration: none; margin-top: 2.5em !important">

            <a href="Sign-in.php" style="color: white; margin-top: 10%; text-decoration: none">Create account</a>
        
        </form>
    </body>
</html>
