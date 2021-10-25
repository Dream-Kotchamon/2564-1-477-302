<!DOCTYPE html>
<html>
<head>
    <title>To do List </title>
</head>
<body>
    <h1>Welcome to To do List Project</h1>

    <?php if(isset($_GET['login'])) {echo "<h2>". $_GET['login'] .</h2>"; } ?>

    <form action="con_login.php" method="post">
        <label>UserName: </label> <input type="text"> name="username"></input>
        <label>Password: </label> <input type="password"> name="password"></input>
        <button type="submit" name="doLogin">Login</button>
    </form>

</body>
</html>