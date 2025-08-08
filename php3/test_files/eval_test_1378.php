<?php
// Eval injection test variation #1378
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>