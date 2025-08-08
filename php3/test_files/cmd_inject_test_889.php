<?php
// Command Injection test variation #889
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>