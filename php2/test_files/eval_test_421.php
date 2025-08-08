<?php
// Eval injection test variation #421
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>