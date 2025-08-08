<?php
// Command Injection test variation #355
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>