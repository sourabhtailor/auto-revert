<?php
// Command Injection test variation #816
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>