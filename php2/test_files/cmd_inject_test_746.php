<?php
// Command Injection test variation #746
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>