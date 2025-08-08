<?php
// Command Injection test variation #827
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>