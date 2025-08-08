<?php
// Eval injection test variation #1197
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>