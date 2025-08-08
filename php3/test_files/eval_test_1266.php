<?php
// Eval injection test variation #1266
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>