<?php
// Command Injection test variation #622
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>