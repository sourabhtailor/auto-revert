<?php
// Eval injection test variation #1251
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>