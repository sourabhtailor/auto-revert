<?php
// Command Injection test variation #927
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>