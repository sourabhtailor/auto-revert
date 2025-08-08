<?php
// Command Injection test variation #896
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>