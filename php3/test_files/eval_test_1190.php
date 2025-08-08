<?php
// Eval injection test variation #1190
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>