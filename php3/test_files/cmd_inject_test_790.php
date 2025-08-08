<?php
// Command Injection test variation #790
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>