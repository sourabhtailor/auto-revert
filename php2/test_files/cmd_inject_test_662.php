<?php
// Command Injection test variation #662
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>