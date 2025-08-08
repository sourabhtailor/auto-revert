<?php
// Eval injection test variation #190
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>