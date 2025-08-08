<?php
// Command Injection test variation #242
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>