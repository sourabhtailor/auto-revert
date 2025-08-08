<?php
// Command Injection test variation #948
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>