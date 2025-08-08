<?php
// Eval injection test variation #1287
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>