<?php
// Command Injection test variation #307
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>