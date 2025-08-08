<?php
// Eval injection test variation #856
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>