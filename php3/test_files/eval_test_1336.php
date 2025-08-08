<?php
// Eval injection test variation #1336
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>