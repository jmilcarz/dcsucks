<?php require_once("./app/init.php");

if (isset($_POST['registerbtn'])) {
     auth::register($_POST['username'], $_POST['email'], $_POST['password'], $_POST['rpassword']);
}

if (auth::loggedin()) {
     header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="<?php echo init::$system_lang; ?>">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>zarejestruj się<?php echo init::$system_name; ?></title>
     <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
     <div class="auth-form">
          <img src="assets/img/logo1.png" alt="" class="logo">
          <form action="" method="post">
               <input type="text" placeholder="username" name="username">
               <input type="email" placeholder="email" name="email">
               <input type="password" placeholder="password" name="password">
               <input type="password" placeholder="repeatpassword" name="rpassword">
               <button type="submit" name="registerbtn"><i class="fa fa-sign-in"></i> zołóż konto</button>
          </form>
          <a href="login.php">already have account?</a>
     </div>
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/functions.js"></script>
</body>
</html>
