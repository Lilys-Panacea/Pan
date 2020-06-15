<?php

	session_start();
    $name = $_POST['nameproduct'];
    $image = $_POST['image'];
    $number = $_POST['number'];
    $cost = $_POST['cost'];
    $db = mysqli_connect('localhost', 'root', 'Rut52730853', 'newбд');
    $query = "INSERT INTO products (name, image, number, cost) VALUES ('$name', '$image', '$number','$cost')";
    $result = mysqli_query($db, $query);
    mysqli_close($db);
    if ($result)
        echo 'Товар успешно добавлен';
?>