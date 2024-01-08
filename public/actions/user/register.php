<?php
session_start();

$config = require_once __DIR__ . '/../../config/app.php';
$db = require_once __DIR__ . '/../../database/db.php';

$email = $_POST['email'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['password_confirmation'];

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = true;
    header('Location: /register.php');
}

if (empty($name)) {
    $_SESSION['error'] = true;
    header('Location: /register.php');
}


if ($password !== $passwordConfirmation) {
    $_SESSION['error'] = true;
    header('Location: /register.php');
}
var_dump($config);
$query = $db->prepare("INSERT INTO users (email, name, dob, passowrd, group_id) VALUES (:email, :name, :dob, :passowrd, :group_id)");
$query->execute([
    'email' => $email,
    'name' => $name,
    'dob' => $dob,
    'password' => $password,
    'group_id' => $config['default_user_group'],
]);