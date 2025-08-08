<?php
// Eval injection test variation #434
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>