<?php
// Eval injection test variation #1452
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>