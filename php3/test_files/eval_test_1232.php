<?php
// Eval injection test variation #1232
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>