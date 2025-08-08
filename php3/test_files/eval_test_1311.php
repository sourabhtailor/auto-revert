<?php
// Eval injection test variation #1311
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>