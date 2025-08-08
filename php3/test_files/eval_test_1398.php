<?php
// Eval injection test variation #1398
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>