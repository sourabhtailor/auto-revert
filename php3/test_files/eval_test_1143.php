<?php
// Eval injection test variation #1143
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>