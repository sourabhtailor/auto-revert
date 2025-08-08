<?php
// Eval injection test variation #460
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>