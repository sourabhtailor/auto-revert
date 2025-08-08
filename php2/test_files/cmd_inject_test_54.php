<?php
// Command Injection test variation #54
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>