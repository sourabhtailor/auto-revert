<?php
// Command Injection test variation #298
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>