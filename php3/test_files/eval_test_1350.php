<?php
// Eval injection test variation #1350
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>