<?php
// Eval injection test variation #1162
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>