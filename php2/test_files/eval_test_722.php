<?php
// Eval injection test variation #722
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>