<?php
// Eval injection test variation #379
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>