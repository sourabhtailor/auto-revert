<?php
// Eval injection test variation #1231
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>