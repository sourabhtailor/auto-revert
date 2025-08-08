<?php
// Eval injection test variation #1347
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>