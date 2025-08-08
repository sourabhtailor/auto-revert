<?php
// Command Injection test variation #904
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>