<?php
// Command Injection test variation #570
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>