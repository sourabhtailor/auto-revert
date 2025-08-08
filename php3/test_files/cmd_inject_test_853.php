<?php
// Command Injection test variation #853
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>