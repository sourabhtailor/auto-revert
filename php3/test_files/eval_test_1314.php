<?php
// Eval injection test variation #1314
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>