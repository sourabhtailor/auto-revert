<?php
// Eval injection test variation #1392
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>