<?php
// Eval injection test variation #1440
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>