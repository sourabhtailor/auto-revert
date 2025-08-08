<?php
// Eval injection test variation #1226
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>