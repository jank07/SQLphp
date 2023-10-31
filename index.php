<!-- INSERT INTO users (username, pwd, email) VALUES ('Krossing', 'dani123', 'johndoe@gmail.com'); -->
<!-- UPDATE users SET username = 'basseIsCool', pwd = 'basse456' WHERE id = 1; -->
<!-- UPDATE users SET username = 'basseIsCool', pwd = 'basse456' WHERE id = 1; -->
<?php
require_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="search.php" class="searchForm" method="post">
    <label for="search">Search for user:</label>
    <input id="search" type="text" name="usersearch" placeholder="Search...">
    <button>Search</button>
</form>

    <h3>Change account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Update</button>
    </form>

    <h3>Delete account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
    </form>

    <h3>Sign up</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Sign up</button>
    </form>
</body>
</html>