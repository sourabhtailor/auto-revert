<?php
// Eval injection test variation #1260
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>