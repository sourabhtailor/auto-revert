<?php
// Eval injection test variation #1238
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>