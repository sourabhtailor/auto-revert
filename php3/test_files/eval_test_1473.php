<?php
// Eval injection test variation #1473
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>