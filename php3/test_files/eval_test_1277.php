<?php
// Eval injection test variation #1277
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>