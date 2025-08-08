<?php
// Command Injection test variation #617
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>