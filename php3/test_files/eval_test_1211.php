<?php
// Eval injection test variation #1211
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>