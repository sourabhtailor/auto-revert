<?php
// Command Injection test variation #469
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>