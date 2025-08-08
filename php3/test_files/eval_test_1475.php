<?php
// Eval injection test variation #1475
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>