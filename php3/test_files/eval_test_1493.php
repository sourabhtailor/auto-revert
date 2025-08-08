<?php
// Eval injection test variation #1493
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>