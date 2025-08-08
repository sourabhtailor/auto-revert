<?php
// Eval injection test variation #817
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>