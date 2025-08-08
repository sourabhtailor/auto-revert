<?php
// Command Injection test variation #542
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>