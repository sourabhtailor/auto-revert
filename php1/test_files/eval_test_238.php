<?php
// Eval injection test variation #238
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>