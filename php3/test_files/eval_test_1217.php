<?php
// Eval injection test variation #1217
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>