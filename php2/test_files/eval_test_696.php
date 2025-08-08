<?php
// Eval injection test variation #696
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>