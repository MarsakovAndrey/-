<?php
session_start();
require('connect.php');
if ($_POST['action'] == 'Add') {
    $username = $_REQUEST['name2'];
    $password = $_REQUEST['password2'];
    $query = "INSERT INTO users_marsakov (name,password) VALUES ('$username','$password')";
    $resultat = mysqli_query($connection, $query);
    if ($resultat) {
        $_SESSION['result']='Добавлено';
        header("Location:users.php");
    } else {
        $_SESSION['result'] = 'Ошибка добавления';
    }
}

if ($_POST['action'] == 'Delete') {

    $id=$_REQUEST['id'];
    $query ="DELETE FROM users_marsakov WHERE id = '$id'";
    $resultat = mysqli_query($connection, $query);
    if ($resultat) {
        $_SESSION['result'] = 'удалено';
        header("Location:users.php");
    } else {
        $_SESSION['result'] = 'Ошибка ';
        header("Location:users.php");
    }

}
?>

