<?php
// Eval injection test variation #948
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>