<?php
// Eval injection test variation #523
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>