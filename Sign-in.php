<?php 

    $db = mysql_connect("localhost",'mnemo_admin','123');
    mysql_select_db("mnemo_bd", $db);

    //$pas_not_sim = "<div style='color : red;'>PASSWORDS ARE NOT SIMILAR</div>";
    if (isset($_POST['button'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // $password_fin = password_hash("", PASSWORD_DEFAULT);
    }
    if (strlen($password) != 0) {

        $query = mysql_query("SELECT * from users WHERE user_email='$email'");
        $myrow = mysql_fetch_array($query);

        if ($email != $myrow['user_email'] && $email !=''){
            $password = md5($password);
            mysql_query("INSERT INTO users(user_name,user_password,user_email) VALUES('$name','$password','$email')");
            header("Location: index.php");             
        }
                 
    }

 ?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    <link rel="icon" href="logo/Icon.png" type="image/x-icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/Main.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
      
    <style>body{background: url(logo/background.png);}</style>
      
  </head>
    <body class="text-center">
        <form class="form-signin" action="Sign-in.php" method="post">
            <img class="mb-4" src="logo/MnemosyneRed.svg" alt="logo">        
            
            <label for="inputeName" class="sr-only">Name</label>
            <input name="name" type="Name" id="inputeName" class="form-control form_labels font" placeholder="Your Name" required>
            
            <label for="inputeEmail" class="sr-only">Email</label>
            <input name="email" type="Email" id="inputeEmail" class="form-control form_labels font" placeholder="Your E-mail Address" required>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="Password" id="inputPassword" class="form-control form_labels font" placeholder="Write Password" required>
            <!-- 
            <button name="button" class="btn btn-lg btn-primary btn-block" style="background: #FF9A61;  border-color: #FF9A61; font-size: 1em !important; font-family: 'Montserrat', sans-serif; font-weight: 500; white-space: pre; margin-top: 2.5em !important;" type="submit">Create Account</button> -->

            <input type="submit" name="button" value="Create Account" class="btn btn-lg btn-primary btn-block" style="background: #FF9A61;  border-color: #FF9A61; font-size: 1em !important; font-family: 'Montserrat', sans-serif; font-weight: 500; white-space: pre; margin-top: 2.5em !important;">
        </form>
    </body>
</html>