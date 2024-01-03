<?php

$host = 'localhost';
$dbname = 'book_db';
$username = 'root';
$password = '';

try 
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem sucedida!";
} 
 catch(PDOException $e) 
{
    echo "Conexão falhou: " . $e->getMessage();
}

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = isset($_POST['arrivals']) ? $_POST['arrivals'] : '';
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO book_form(nome, email, phone, address, location, guests, arrivals, leaving) VALUES ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    $pdo->exec($request);

    header('location:book.php');
}
else
{
    echo 'something went wrong try again';
}

?>
