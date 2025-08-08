<?php
// Eval injection test variation #1270
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>