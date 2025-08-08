<?php
// Eval injection test variation #1278
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>