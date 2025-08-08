<?php
// Eval injection test variation #1437
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>