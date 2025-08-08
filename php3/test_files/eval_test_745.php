<?php
// Eval injection test variation #745
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>