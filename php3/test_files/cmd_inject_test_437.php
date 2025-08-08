<?php
// Command Injection test variation #437
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>