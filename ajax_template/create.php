<?php

$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$uname = $_POST['uname'];

$connection = new mysqli('localhost', 'root', '', 'ajax129');
$connection->query("INSERT INTO students (name, email, cell, username) VALUES ('$name','$email','$cell','$uname')");
