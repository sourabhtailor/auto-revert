<?php
// Command Injection test variation #891
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>