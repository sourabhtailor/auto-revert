<?php
// Command Injection test variation #471
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>