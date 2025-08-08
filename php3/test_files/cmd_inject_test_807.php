<?php
// Command Injection test variation #807
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>