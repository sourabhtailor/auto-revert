<?php
// Eval injection test variation #365
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>