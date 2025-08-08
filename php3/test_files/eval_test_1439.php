<?php
// Eval injection test variation #1439
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>