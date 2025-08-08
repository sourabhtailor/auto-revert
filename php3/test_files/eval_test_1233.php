<?php
// Eval injection test variation #1233
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>