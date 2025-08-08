<?php
// Eval injection test variation #1322
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>