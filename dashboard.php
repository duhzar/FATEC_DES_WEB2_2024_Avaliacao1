<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
if (isset($_POST['register_car'])) {
    $name = $_POST['name'];
    $ra = $_POST['ra'];
    $license_plate = $_POST['license_plate'];

    $record = "$name|$ra|$license_plate\n";

    if ($_SESSION['active_tab'] === 'carros') {
        file_put_contents('carros.txt', $record, FILE_APPEND);
    } elseif ($_SESSION['active_tab'] === 'motos') {
        file_put_contents('motos.txt', $record, FILE_APPEND);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
    <h2>Registrar Carro</h2>
<form method="post">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="ra">RA:</label>
    <input type="text" id="ra" name="ra" required><br><br>
    <label for="license_plate">Placa:</label>
    <input type="text" id="license_plate" name="license_plate" required><br><br>
    <input type="submit" name="register_car" value="Registrar Carro">
</form>
<h2>Registrar Moto</h2>
<form method="post">
    <label for="namem">Nome:</label>
    <input type="text" id="namem" name="namem" required><br><br>
    <label for="ra2">RA:</label>
    <input type="text" id="ra2" name="ra2" required><br><br>
    <label for="license_platem">Placa:</label>
    <input type="text" id="license_platem" name="license_platem" required><br><br>
    <input type="submit" name="register_mot" value="Registrar Moto">
</form>
</body>

</html>