<?php
// Eval injection test variation #1408
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>