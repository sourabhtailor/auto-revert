<?php
// Command Injection test variation #939
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>