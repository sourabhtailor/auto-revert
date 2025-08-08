<?php
// Command Injection test variation #898
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>