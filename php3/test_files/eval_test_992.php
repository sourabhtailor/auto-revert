<?php
// Eval injection test variation #992
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>