<?php
// Eval injection test variation #1461
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>