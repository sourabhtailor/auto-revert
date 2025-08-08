<?php
// Eval injection test variation #1220
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>