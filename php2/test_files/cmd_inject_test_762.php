<?php
// Command Injection test variation #762
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>