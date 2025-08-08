<?php
// Command Injection test variation #1155
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>