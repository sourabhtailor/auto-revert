<?php
// Eval injection test variation #748
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>