<?php
// Command Injection test variation #278
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>