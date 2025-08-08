<?php
// Eval injection test variation #1281
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>