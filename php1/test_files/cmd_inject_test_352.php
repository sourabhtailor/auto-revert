<?php
// Command Injection test variation #352
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>