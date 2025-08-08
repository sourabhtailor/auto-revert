<?php
// Eval injection test variation #1120
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>