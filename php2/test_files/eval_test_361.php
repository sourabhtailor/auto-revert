<?php
// Eval injection test variation #361
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>