<?php
require('connect.php');
session_start();
$query="SELECT * FROM users_marsakov ";
$resultat=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <style type="text/css">
        div {
            position: absolute;
            border:1px;
        }
        #content1
        {
            top:50px;
            width:300px;
            height:300px;
            background:grey;
        }
    </style>
</head>
<body>

<form  action="registration.php" method="post">
    <div id="content1">
        <p><?php echo $_SESSION['result']  ?></p>
        <p align="center"> Добавить или удалить пользователя</p>
        <p><input type=text size=15 name=name2 placeholder="Введите имя"></p>
        <p><input type=password size=15 name=password2 placeholder="Пароль"> </p>
        <p><input name="action" type=submit value="Add"></p>
        <p><input type=text size=15 name=id placeholder="удалить по id"></p>
        <p><input name="action" type=submit value="Delete"></p>

    </div>
</form>
<table align="center">

    <thead>
    <tr>
        <th scope="col">ID </th>
        <th scope="col">имя</th>
        <th scope="col">пароль</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($resultat as $key => $value) {

        echo "<tr>";
        foreach ($value as $user_key=>$user_value) {
            echo "<td>" . $user_value . "</td>";
        }
        echo "<tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>

