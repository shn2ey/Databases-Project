<!DOCTYPE html>
<html>

<head>

    <title style="color:#3E3E3E;">Login</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="login.php" method="post">

        <h2>Login</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>Medical User ID</label>

        <input type="text" name="user_ID" placeholder="Type your medical user id"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Type your password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>