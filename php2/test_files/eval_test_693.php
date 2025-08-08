<?php
// Eval injection test variation #693
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>