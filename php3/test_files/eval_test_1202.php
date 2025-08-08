<?php
// Eval injection test variation #1202
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>