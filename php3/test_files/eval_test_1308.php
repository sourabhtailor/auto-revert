<?php
// Eval injection test variation #1308
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>