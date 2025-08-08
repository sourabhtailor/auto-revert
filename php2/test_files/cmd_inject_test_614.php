<?php
// Command Injection test variation #614
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>