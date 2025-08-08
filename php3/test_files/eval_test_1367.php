<?php
// Eval injection test variation #1367
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>