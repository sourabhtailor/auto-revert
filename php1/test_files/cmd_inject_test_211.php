<?php
// Command Injection test variation #211
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>