<?php
// Command Injection test variation #1334
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>