<?php
// Eval injection test variation #1203
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>