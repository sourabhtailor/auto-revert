<?php
// Command Injection test variation #820
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>