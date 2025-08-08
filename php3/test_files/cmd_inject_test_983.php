<?php
// Command Injection test variation #983
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>