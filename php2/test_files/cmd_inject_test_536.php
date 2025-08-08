<?php
// Command Injection test variation #536
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>