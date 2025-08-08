<?php
// Eval injection test variation #625
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>