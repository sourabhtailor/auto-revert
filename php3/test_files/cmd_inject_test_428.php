<?php
// Command Injection test variation #428
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>