<?php
// Eval injection test variation #511
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>