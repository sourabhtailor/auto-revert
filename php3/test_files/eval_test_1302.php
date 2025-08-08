<?php
// Eval injection test variation #1302
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>