<?php

$dbUser = "root";
$dbPass = "1234";
$dbHost = "localhost";
$dbDatabase = "neo5";

$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);

if ($mysqli->connect_error) {
    die("<strong>Error:</strong> (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

if (isset($_POST['sub'])) {
    if ($_POST['sub'] == "Comentar") {
        $sql = "INSERT INTO `user`(`nome`, `email`, `comentario`) VALUES ('" . $_POST['nome'] . "','" . $_POST['email'] . "','" . $_POST['comentario'] . "')";
        $query = $mysqli->query($sql);
    } else if ($_POST['sub'] == "Excluir") {
        $sql = "DELETE FROM `user` WHERE id = '" . $_POST['id'] . "'";
        $query = $mysqli->query($sql);
    }
    header("Location: ./");
}
?>