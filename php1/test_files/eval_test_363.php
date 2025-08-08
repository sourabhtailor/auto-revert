<?php
// Eval injection test variation #363
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>