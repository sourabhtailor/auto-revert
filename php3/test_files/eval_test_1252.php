<?php
// Eval injection test variation #1252
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>