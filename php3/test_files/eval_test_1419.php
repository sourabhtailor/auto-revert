<?php
// Eval injection test variation #1419
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>