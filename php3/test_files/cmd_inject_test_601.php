<?php
// Command Injection test variation #601
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>