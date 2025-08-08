<?php
// Eval injection test variation #773
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>