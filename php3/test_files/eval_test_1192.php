<?php
// Eval injection test variation #1192
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>