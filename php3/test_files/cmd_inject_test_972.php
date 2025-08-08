<?php
// Command Injection test variation #972
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>