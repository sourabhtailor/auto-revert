<?php
// Eval injection test variation #461
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>