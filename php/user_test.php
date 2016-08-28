<?php
require __DIR__"User.php";

$user = new User();
$user->name = "Bob";
$user->email = "bob@codeup.com";
$user->password = password_hash("password", PASSWORD_DEFAULT);
$user = User::find(12);
$user->save();
$users = User::all();

// $inputs = $_POST;
// $user = new User($inputs);
// $user->save();

// var_dump($user);
// $users = User::all();
// var_dump($users);