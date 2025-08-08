<?php
// Command Injection test variation #756
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>