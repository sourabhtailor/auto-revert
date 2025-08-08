<?php
// Eval injection test variation #1200
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>