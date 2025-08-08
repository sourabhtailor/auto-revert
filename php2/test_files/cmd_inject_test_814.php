<?php
// Command Injection test variation #814
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>