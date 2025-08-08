<?php
// Eval injection test variation #857
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>