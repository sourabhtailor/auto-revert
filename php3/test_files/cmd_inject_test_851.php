<?php
// Command Injection test variation #851
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>