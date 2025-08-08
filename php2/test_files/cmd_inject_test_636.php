<?php
// Command Injection test variation #636
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>