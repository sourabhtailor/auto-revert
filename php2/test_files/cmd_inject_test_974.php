<?php
// Command Injection test variation #974
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>