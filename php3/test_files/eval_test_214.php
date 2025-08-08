<?php
// Eval injection test variation #214
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>