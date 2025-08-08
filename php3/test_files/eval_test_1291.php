<?php
// Eval injection test variation #1291
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>