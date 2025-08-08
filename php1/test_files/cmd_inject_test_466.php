<?php
// Command Injection test variation #466
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>