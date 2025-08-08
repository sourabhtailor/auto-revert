<?php
// Eval injection test variation #1386
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>