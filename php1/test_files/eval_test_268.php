<?php
// Eval injection test variation #268
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>