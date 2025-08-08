<?php
// Command Injection test variation #965
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>