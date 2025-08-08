<?php
// Command Injection test variation #383
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>