<?php
// Command Injection test variation #840
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>