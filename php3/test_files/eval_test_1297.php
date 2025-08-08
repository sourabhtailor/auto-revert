<?php
// Eval injection test variation #1297
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>