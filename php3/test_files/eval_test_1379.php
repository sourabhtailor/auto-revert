<?php
// Eval injection test variation #1379
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>