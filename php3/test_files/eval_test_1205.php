<?php
// Eval injection test variation #1205
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>